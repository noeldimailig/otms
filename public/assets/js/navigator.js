const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('nav a');

navLinks.forEach (link => {
    if (link.href.includes('http://localhost' + `${activePage}`)) {
        link.classList.add('active');
    }
});