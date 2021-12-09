document.querySelector('.menu-btn').addEventListener('click', () => {
    document.querySelector('.nav-menu').classList.toggle('show');
});

ScrollReveal().reveal('.principal');
ScrollReveal().reveal('.destacados', {delay : 500});
ScrollReveal().reveal('.titular');
ScrollReveal().reveal('.parrafo', {delay : 500});
ScrollReveal().reveal('.mcontacto', {delay : 500});