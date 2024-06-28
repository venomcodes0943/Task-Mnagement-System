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


import ldcover from 'ldcover';


// TaskModal

const taskModal = document.querySelector('#taskModal');

if (taskModal) {
    const ldcv = new ldcover({ root: taskModal });
    const modals = document.querySelectorAll('.openModal');
    if (modals) {
        modals.forEach(modal => {
            modal.addEventListener('click', function () {
                ldcv.toggle();
            });
        });
    }
}

// ProjectModal

const projectModal = document.querySelector('#projectModal');

if (projectModal) {
    const ldcv = new ldcover({ root: projectModal });
    const modals = document.querySelectorAll('.openProjectModal');
    if (modals) {
        modals.forEach(modal => {
            modal.addEventListener('click', function () {
                ldcv.toggle();
            });
        });
    }
}


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

const scheduleDelete = document.querySelector('#scheduleDelete');

if (scheduleDelete) {
    const ldcv = new ldcover({ root: scheduleDelete });
    const modals = document.querySelectorAll('.deleteSchedule');
    if (modals) {
        modals.forEach(modal => {
            modal.addEventListener('click', function () {
                const deleteId = $(this).data('delete_id');
                scheduleDelete.dataset.deleteId = deleteId;
                ldcv.toggle();
            });
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

