<?php
$footer = dw_get_navigation_links('footer');
?>
<footer class="footer">
    <nav class="footer__nav" aria-labelledby="footer-nav-title">
        <h2 class="footer__title" id="footer-nav-title">Navigation</h2>
        <ul class="footer__list" role="list">
            <?php foreach ($footer as $link) : ?>
                <li class="footer__item">
                    <a class="footer__link" href="<?= $link->href ?>"><?= $link->label ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

</footer>

