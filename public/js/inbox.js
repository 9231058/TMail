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

function onInboxLoad () {
  var inbox = new Vue({
    el: '#home',
    data: {
      mails: []
    }
  })
}
