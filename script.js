
var typed = new Typed(".home_input", {
        strings: ["is Eco friendly.", "is Comfortable.", "Has Green nature.", "is well managed."],
    typeSpeed: 70,
    backSpeed: 60,
    loop: true
});

const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const nab_bar_btn = document.querySelector('.nab_bar_btn');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

nab_bar_btn.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});