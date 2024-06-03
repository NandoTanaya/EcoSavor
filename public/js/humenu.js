//Toggle active class
const navbarNav = document.querySelector('.navbar-nav');
//ketika humenu di klik
document.querySelector('#humenu').onclick = () => {
    navbarNav.classList.toggle('active');
};