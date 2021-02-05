'use strict';
let images = document.querySelectorAll('.image');
let modal = document.querySelector('.modal');
let modalImage = document.querySelector('.modal-image img');
let closed = document.querySelector('.modal-closed');


images.forEach((img) => {
    img.addEventListener('click', (e) => {
        console.log(e.target.getAttribute('src'));

        modal.classList.add('show');
        modalImage.setAttribute('src', e.target.getAttribute('src'));
    });
});

modal.addEventListener('click', (e) => {
    if(e.target === modal) {
        modal.classList.remove('show');
    }
});

closed.addEventListener('click', () => {
    modal.classList.remove('show');
});