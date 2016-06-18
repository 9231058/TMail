/*
 * +===============================================
 * | Author:        Parham Alvani (parham.alvani@gmail.com)
 * |
 * | Creation Date: 16-06-2016
 * |
 * | File Name:     index.js
 * +===============================================
 */
window.onload = onIndexLoad()

function onIndexLoad () {
  var register = document.getElementById('register')
  var login = document.getElementById('login')
  var swapBtn = document.getElementById('register-btn')

  register.style.display = 'none'
  swapBtn.onclick = function () {
    if (register.style.display !== 'none') {
      register.style.display = 'none'
      login.style.display = 'block'
      swapBtn.innerHTML = 'Register New Account'
    } else {
      register.style.display = 'block'
      login.style.display = 'none'
      swapBtn.innerHTML = 'Already have account ? Login !'
    }
  }
}
