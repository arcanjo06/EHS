document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.favorite');

    stars.forEach(star => {
        star.addEventListener('click', () => {
            if (star.classList.contains('active')) {
                star.classList.remove('active');
            } else {
                star.classList.add('active');
            }
        });
    });
});