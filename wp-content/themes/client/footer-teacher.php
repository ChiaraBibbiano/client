<?php
$footer = dw_get_navigation_links('footer-teacher');
?>
<footer class="footer">
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
</footer>
</body>
</html>

