<?php
$title1 = get_field('title');
$title2 = get_field('title_sub');
$sub    = get_field('subtitle');
$img    = get_field('photo_fille');
?>

<section class="hero-teacher" aria-labelledby="hero-teacher-title">
    <div class="hero-teacher__left">

        <?php if ( ! empty( $title1 ) ) : ?>
            <h2 class="hero-teacher__title">
                <?= esc_html( $title1 ) ?>
            </h2>
        <?php endif; ?>

        <?php if ( ! empty( $title2 ) ) : ?>
            <h3 class="hero-teacher__subtitle">
                <?= esc_html( $title2 ) ?>
            </h3>
        <?php endif; ?>

        <svg aria-hidden="true" focusable="false" role="presentation">
            <use href="#deco-cercle"/>
        </svg>

        <?php if ( ! empty( $sub ) ) : ?>
            <p class="hero-teacher__sub">
                <?= wp_kses_post( $sub ) ?>
            </p>
        <?php endif; ?>

        <svg aria-hidden="true" focusable="false" role="presentation">
            <use href="#deco-soulignement"/>
        </svg>

    </div>

    <?php if ( ! empty( $img['id'] ) ) : ?>
        <div class="hero-teacher__illustration" role="presentation">
            <?= wp_get_attachment_image( (int) $img['id'], 'full' ) ?>
        </div>
        <svg aria-hidden="true" focusable="false" role="presentation">
            <use href="#illustration-hero"/>
        </svg>
    <?php endif; ?>

</section>