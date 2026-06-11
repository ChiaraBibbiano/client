<?php
$title        = get_field('title');
$text         = get_field('description_header');
$illustration = get_field('illustration_hero');
?>
<section class="hero">
    <?php if ( ! empty( $title ) ) : ?>
        <h2 class="hero__title">
            <?= esc_html( $title ) ?>
        </h2>
    <?php endif; ?>

    <?php if ( ! empty( $text ) ) : ?>
        <p class="hero__text">
            <?= wp_kses_post( $text ) ?>
        </p>
    <?php endif; ?>
    <svg class="hero__cercle" aria-hidden="true" focusable="false">
        <use href="#deco-cercle"></use>
    </svg>
    <svg class="hero__soulDeux" aria-hidden="true" focusable="false" role="presentation">
        <use href="#deco-soulignement"/>
    </svg>
    <svg class="hero__soulUn" aria-hidden="true" focusable="false" role="presentation">
        <use href="#deco-soulignement"/>
    </svg>

    <?php if ( ! empty( $illustration['id'] ) ) : ?>
        <div class="hero__illustration">
            <?= wp_get_attachment_image( (int) $illustration['id'], 'full' ) ?>

        </div>
    <?php endif; ?>

</section>