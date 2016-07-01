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

var fetchedMail = 0

var inbox = new Vue({
  el: '#home',
  data: {
    mails: [],
    limit: 5,
    offset: 0
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
    }
  }
})

function onInboxLoad () {
  $('#compose-recipient').blur(checkMailExistance)
  $('#compose-send').click(sendMail)
  fetchMail(0, 5)
}

function fetchMail (offset, limit) {
  $.ajax({
    type: 'GET',
    url: '/TMail/mail/' + offset + '/' + limit,
    dataType: 'json',
    success: function (mails) {
      fetchedMail += limit
      inbox.mails = inbox.mails.concat(mails)
    }
  })
}

function checkMailExistance () {
}

function sendMail () {
  var form = {
    'recipient': $('#compose-recipient').val(),
    'title': $('#compose-title').val(),
    'content': $('#compose-content').val()
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
      $('#compose').modal('hide')
    },
    error: function (msg) {
      compose.hasError = true
      compose.errors = msg.responseJSON
    }
  })
}
