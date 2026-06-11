<?php
$footer = dw_get_navigation_links('footer-teacher');
?>
<footer class="footer">
    <div class="footer__top">
    <a href="<?= esc_url( home_url('/') ) ?>" class="footer__logo">
        <svg aria-label="Logo PLAI" role="img">
            <use href="#logo"/>
        </svg>
    </a>
    <nav class="footer__nav" aria-labelledby="footer-nav-title">
        <h2 class="footer__title" id="footer-nav-title">Navigation</h2>
        <ul class="footer__list" role="list">
            <?php foreach ($footer as $link) : ?>
                <li class="footer__item">
                    <a class="footer__link" href="<?= esc_url( $link->href ) ?>">
                        <?= esc_html( $link->label ) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    </div>
    <div class="footer__bottom">
        <p class="footer__copyright">
            ©<?= date('Y'); ?> Site internet réalisé par BIBBIANO CHIARA.Tous droits réservés.
        </p>
        <ul class="footer__legal" role="list">
            <li class="footer__legal-item">
                <a class="footer__legal-link" href="<?= esc_url(home_url('/mentions-legales')); ?>">
                    Mentions légales
                </a>
            </li>
        </ul>
    </div>
</footer>
</body>
</html>

