<?php
$title = get_field('title_three');
$text = get_field('text_three');
$illustration = get_field('illustration_s3');
?>

<section class="section-3">
    <div class="section-3__right">
        <?php if (!empty($title)) : ?>
            <h2 class="section-3__title title">
                <?= esc_html($title) ?>
            </h2>
        <?php endif; ?>

        <?php if (!empty($text)) : ?>
            <p class="section-3__text sub">
                <?= wp_kses_post($text) ?>
            </p>
        <?php endif; ?>
    </div>
    <div class="section-3__left">
        <?php if (!empty($illustration['id'])) : ?>
            <div class="section-3__illustration">
                <?= wp_get_attachment_image((int)$illustration['id'], 'full') ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<section>
    <div class="section-3__svg">
        <svg class="section-3__regle" aria-hidden="true" focusable="false" role="presentation">
            <use href="#deco-regles"/>
        </svg>
    </div>
</section>