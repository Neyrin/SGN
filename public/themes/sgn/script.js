'use strict'

let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () {
  mainNav.classList.toggle('mobile_view');
});

const selectLanguage = document.querySelector('.pll-parent-menu-item')
const currentLanguage = selectLanguage.children[0]
const otherLanguages = selectLanguage.children[1]

currentLanguage.addEventListener('click',(e) => {
    e.preventDefault();
    otherLanguages.classList.toggle('sub-menu__open')
});
