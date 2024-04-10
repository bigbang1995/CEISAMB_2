document.addEventListener("DOMContentLoaded", function() {
    const subtemas = document.querySelectorAll('.temario h4');

    subtemas.forEach(subtema => {
        subtema.addEventListener('click', () => {
            subtema.nextElementSibling.classList.toggle('visible');
        });
    });
});