<?php
$title        = get_field('title_three');
$text         = get_field('text_three');
$illustration = get_field('illustration_s3');
?>

<section class="section-3">

    <?php if ( ! empty( $title ) ) : ?>
        <h2 class="section-3__title">
            <?= esc_html( $title ) ?>
        </h2>
    <?php endif; ?>

    <?php if ( ! empty( $text ) ) : ?>
        <p class="section-3__text">
            <?= wp_kses_post( $text ) ?>
        </p>
    <?php endif; ?>

    <?php if ( ! empty( $illustration['id'] ) ) : ?>
        <div class="section-3__illustration">
            <?= wp_get_attachment_image( (int) $illustration['id'], 'full' ) ?>
        </div>
    <div class="section-3__illustration-svg">
        <svg aria-hidden="true" focusable="false">
            <use href="#illustration-hero"/>
        </svg>
    </div>
    <?php endif; ?>

</section>