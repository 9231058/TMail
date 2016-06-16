/*
 * +===============================================
 * | Author:        Parham Alvani (parham.alvani@gmail.com)
 * |
 * | Creation Date: 16-06-2016
 * |
 * | File Name:     index.js
 * +===============================================
 */
document.ready = function () {
  $.post('', {login: 'user'}, function (data) {
    console.log(data)
    if (data === 1) {
      var url = '../html/inbox.html?' + getCookie('username')
      alert(url)
      setTimeout(function () { window.location = url }, 1000)
    }
  })
}

function getCookie (cname) {
  var name = cname + '='
  var ca = document.cookie.split(';')
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i]
    while (c.charAt(0) === ' ') c = c.substring(1)
    if (c.indexOf(name) === 0) return c.substring(name.length, c.length)
  }
  return ''
}
