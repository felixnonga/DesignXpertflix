// Exemple d'animation d'apparition lors du scroll
window.addEventListener('scroll', function () {
    const elements = document.querySelectorAll('.hero h1');
    elements.forEach((element) => {
        const position = element.getBoundingClientRect().top;
        if (position < window.innerHeight) {
            element.classList.add('fadeIn');
        }
    });
});