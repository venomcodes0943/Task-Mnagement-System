import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Alpine Js

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

import ldcover from 'ldcover';

// Member Modal
const memberModal = document.querySelector('#memberModal');
if (memberModal) {
    const ldcv = new ldcover({ root: memberModal });
    const modal = document.querySelector('.openmember');
    if (modal) {
        modal.addEventListener('click', function () {
            ldcv.toggle();
        });
    }
}


// Sidebar Handleing

document.getElementById('btn').addEventListener('click', function () {
    let sidebar = document.getElementById('sidebar');
    let btnRight = document.getElementById('btn-right');
    let btnLeft = document.getElementById('btn-left');
    btnRight.classList.toggle('hidden');
    btnLeft.classList.toggle('hidden');
    let mainContent = document.getElementById('main-content');
    if (sidebar) {
        sidebar.classList.toggle('-translate-x-full');
        sidebar.classList.toggle('translate-x-0');
        mainContent.classList.toggle('with-sidebar');
    } else {
        console.error('Sidebar element not found');
    }
});

// Loader
document.addEventListener('DOMContentLoaded', function () {
    let loader = document.getElementById('loader');
    if (loader) {
        setTimeout(() => {
            loader.classList.add('hidden');
        }, 1000);
    }
});

