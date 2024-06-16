import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Alpine Js

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

// Tippy Js

import tippy from 'tippy.js';
import 'tippy.js/dist/tippy.css';

document.addEventListener('DOMContentLoaded', () => {
    tippy('.tooltip', {
        content: (reference) => reference.getAttribute('data-tippy'),
        placement: 'bottom'
    });
});




// Task Delete

const delteBtn = document.getElementById('delete');
const toDelete = document.getElementById('todelete');
const cancelDelete = document.getElementById('cancelDelete');
delteBtn.addEventListener('click', function () {
    delteBtn.classList.add('hidden');
    toDelete.classList.remove('hidden');
});

cancelDelete.addEventListener('click', function () {
    if (delteBtn.classList.contains('hidden')) {
        delteBtn.classList.remove('hidden');
        toDelete.classList.add('hidden');
    }
});


// Task Description

const disSpan = document.getElementById('disSpan');
const disToWrite = document.getElementById('disToWrite');
const cancelToWrite = document.getElementById('cancelToWrite');

function toggleVisibility(hiddenElement, visibleElement) {
    hiddenElement.classList.add('hidden');
    visibleElement.classList.remove('hidden');
}

disSpan.addEventListener('click', function () {
    toggleVisibility(disSpan, disToWrite);
});

cancelToWrite.addEventListener('click', function () {
    toggleVisibility(disToWrite, disSpan);
});

// Checkout List

const addItem = document.getElementById('addItem')
const writeItem = document.getElementById('writeItem')
const canelWriteItem = document.getElementById('canelWriteItem')

addItem.addEventListener('click', function () {
    toggleVisibility(addItem, writeItem);
});
canelWriteItem.addEventListener('click', function () {
    toggleVisibility(writeItem, addItem);
});

// Comments

const comment = document.getElementById('comment')
const writeComment = document.getElementById('writeComment')
const cancelComment = document.getElementById('cancelComment')

comment.addEventListener('click', function () {
    toggleVisibility(comment, writeComment);
});

cancelComment.addEventListener('click', function () {
    toggleVisibility(writeComment, comment);
});



// ldcover Js

import ldcover from 'ldcover';

const ldcv = new ldcover({ root: "#my-modal" });
document.querySelector('.openModal').addEventListener('click', function () {
    ldcv.toggle();
});






























document.getElementById('btn').addEventListener('click', function () {
    let sidebar = document.getElementById('sidebar');
    let btnRight = document.getElementById('btn-right');
    let btnLeft = document.getElementById('btn-left');
    btnRight.classList.toggle('hidden');
    btnLeft.classList.toggle('hidden');
    let mainContent = document.getElementById('main-content');
    if (sidebar) {
        console.log(sidebar);
        sidebar.classList.toggle('-translate-x-full');
        sidebar.classList.toggle('translate-x-0');
        mainContent.classList.toggle('with-sidebar');
    } else {
        console.error('Sidebar element not found');
    }
});

