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

function toggleMenu() {
    var sidebar = document.getElementById("sidebar");
    if (sidebar.style.display === "flex") {
        sidebar.style.display = "none";
    } else {
        sidebar.style.display = "flex";
    }
}