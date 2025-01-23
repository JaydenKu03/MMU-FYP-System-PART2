const announcementTab = document.getElementById('announcement-tab');
const eventTab = document.getElementById('event-tab');
const announcementForm = document.getElementById('announcement-form');
const eventForm = document.getElementById('event-form');

announcementTab.addEventListener('click', () => {
    announcementTab.classList.add('active-tab');
    eventTab.classList.remove('active-tab');
    announcementForm.classList.add('active-form');
    eventForm.classList.remove('active-form');
});

eventTab.addEventListener('click', () => {
    eventTab.classList.add('active-tab');
    announcementTab.classList.remove('active-tab');
    eventForm.classList.add('active-form');
    announcementForm.classList.remove('active-form');
});