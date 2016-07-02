/*
 * +===============================================
 * | Author:        Parham Alvani (parham.alvani@gmail.com)
 * |
 * | Creation Date: 29-06-2016
 * |
 * | File Name:     inbox.js
 * +===============================================
 */
window.onload = onInboxLoad

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
})

var inbox = new Vue({
  el: '#home',
  data: {
    mails: []
  },
  methods: {
    read: function (mail) {
      if (mail.is_spam) {
        alert('This is a spam')
      }
      if (box.isInbox) {
        if (typeof mail.readed_at === 'undefined') {
          readMail(mail._id)
        }
      }
    }
  }

})

var compose = new Vue({
  el: '#compose',
  data: {
    hasError: false,
    errors: {
      recipient: '',
      title: '',
      content: ''
    },
    attachments: []
  }
})

var box = new Vue({
  el: '#box',
  data: {
    isInbox: true,
    isSent: false
  },
  methods: {
    toInbox: function () {
      if (!this.isInbox) {
        this.isInbox = true
        this.isSent = false
        fetchMail()
        $('#box-inbox').addClass('active')
        $('#box-sent').removeClass('active')
      }
    },
    toSent: function () {
      if (!this.isSent) {
        this.isInbox = false
        this.isSent = true
        fetchMail()
        $('#box-inbox').removeClass('active')
        $('#box-sent').addClass('active')
      }
    }
  }
})

var pagination = new Vue({
  el: '#pagination',
  data: {
    from: 0,
    to: 0,
    total: 0,
    nextUrl: null,
    backUrl: null
  },
  methods: {
    next: function () {
      if (this.nextUrl != null) {
        fetchMail(this.nextUrl)
      }
    },
    back: function () {
      if (this.backUrl != null) {
        fetchMail(this.backUrl)
      }
    }
  }
})

function onInboxLoad () {
  $('#compose-recipient').blur(checkMailExistance)
  $('#compose-send').click(sendMail)
  $('#compose-content').summernote()
  $('#compose-attachment').change(encodeAttachment)
  $('button[title=Refresh').click(fetchMail)
  fetchMail()
}

function encodeAttachment () {
  var file = document.getElementById('compose-attachment').files[0]
  var reader = new FileReader()

  var attachment = {
    name: file.name,
    loading: true,
    link: ''
  }
  compose.attachments.push(attachment)

  reader.addEventListener('load', function () {
    attachment.link = reader.result
    attachment.loading = false
  }, false)

  if (file) {
    reader.readAsDataURL(file)
  }
}

function readMail (id) {
  $.ajax({
    type: 'GET',
    url: '/TMail/mail/read/' + id,
    dataType: 'json',
    success: function (response) {
      var i = inbox.mails.find(function (mail, index) {
        if (mail._id === id) {
          return index
        }
      })
      console.log(i)
      console.log(response)
      inbox.mails.splice(i, 1, response)
    }
  })
}

function fetchMail (url) {
  if (typeof url !== 'string') {
    if (box.isInbox) {
      url = '/TMail/mail/inbox'
    }
    if (box.isSent) {
      url = '/TMail/mail/sent'
    }
  }
  $.ajax({
    type: 'GET',
    url: url,
    dataType: 'json',
    success: function (response) {
      pagination.to = response.to
      pagination.from = response.from
      pagination.total = response.total
      pagination.nextUrl = response.next_page_url
      pagination.backUrl = response.prev_page_url
      inbox.mails = response.data
    }
  })
}

function checkMailExistance () {
}

function sendMail () {
  var form = {
    'recipient': $('#compose-recipient').val(),
    'title': $('#compose-title').val(),
    'content': $('#compose-content').summernote('code')
  }
  if (compose.attachments.length > 0) {
    form.attachments = compose.attachments
  }
  $.ajax({
    type: 'POST',
    url: '/TMail/mail',
    data: form,
    dataType: 'json',
    success: function (msg) {
      compose.hasError = false
      $('#compose-recipient').val('')
      $('#compose-title').val('')
      $('#compose-content').val('')
      compose.attachments = []
      $('#compose').modal('hide')
    },
    error: function (msg) {
      compose.hasError = true
      compose.errors = msg.responseJSON
    }
  })
}
