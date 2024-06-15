import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

import tippy from 'tippy.js';
import 'tippy.js/dist/tippy.css';

document.addEventListener('DOMContentLoaded', () => {
    tippy('.tooltip', {
        content: (reference) => reference.getAttribute('data-tippy'),
        placement: 'bottom'
    });
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

