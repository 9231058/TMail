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
      console.log(msg)
    },
    error: function (msg) {
      compose.hasError = true
      compose.errors = msg.responseJSON
    }
  })
}
