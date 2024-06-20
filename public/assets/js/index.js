
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


// Task Add

const addTask = document.querySelectorAll('.addTask');
const writetask = document.querySelectorAll('.writetask');
const cancelTask = document.querySelectorAll('.cancelTask');

addTask.addEventListener('click', function () {
    toggleVisibility(addTask, writetask);
})
cancelTask.addEventListener('click', function () {
    toggleVisibility(writetask, addTask);
});
