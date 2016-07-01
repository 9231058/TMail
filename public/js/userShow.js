/*
 * +===============================================
 * | Author:        Parham Alvani (parham.alvani@gmail.com)
 * |
 * | Creation Date: 30-06-2016
 * |
 * | File Name:     userShow.js
 * +===============================================
 */
window.onload = onUserShow()

var csrf = $('meta[name="csrf-token"]').attr('content')

function onUserShow () {
  var contact = new Vue({
    el: '#contact',
    data: {isContact: false}
  })

  var xhr = new XMLHttpRequest()
  xhr.open('GET', '/TMail/user/contact/' + userId, true)
  xhr.send()
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var data = JSON.parse(xhr.responseText)
      contact.isContact = data.isContact
    }
  }

  if (document.getElementById('add-contact') !== null) {
    document.getElementById('add-contact').onclick = addContact
  }
}

function addContact () {
  var xhr = new XMLHttpRequest()

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var data = JSON.parse(xhr.responseText)
      console.log(data)
    }
  }

  xhr.open('POST', '/TMail/user/contact/' + userId, true)
  xhr.setRequestHeader('X-CSRF-TOKEN', csrf)
  xhr.send('')
}
