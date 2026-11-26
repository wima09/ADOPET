
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('menuToggle');
    const menu = document.getElementById('navLinks');

    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            menu.classList.toggle('show');

            toggle.textContent = menu.classList.contains('show')
                ? '✕'
                : '☰';
        });
    }
});
