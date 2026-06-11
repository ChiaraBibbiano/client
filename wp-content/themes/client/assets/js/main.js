// Sélection du bouton burger et du menu
const burger = document.querySelector('.navigation__burger');
const menu   = document.querySelector('#navigation-menu');

if (burger && menu) {

    // Clic sur le burger : ouvre/ferme le menu
    burger.addEventListener('click', () => {
        const isOpen = burger.getAttribute('aria-expanded') === 'true';
        burger.setAttribute('aria-expanded', String(!isOpen));
        menu.setAttribute('data-open', String(!isOpen));
    });

    // Touche Escape : ferme le menu et remet le focus sur le burger
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && menu.dataset.open === 'true') {
            burger.setAttribute('aria-expanded', 'false');
            menu.setAttribute('data-open', 'false');
            burger.focus();
        }
    });

    // Clic en dehors : ferme le menu
    document.addEventListener('click', (e) => {
        if (!burger.contains(e.target) && !menu.contains(e.target)) {
            burger.setAttribute('aria-expanded', 'false');
            menu.setAttribute('data-open', 'false');
        }
    });
}