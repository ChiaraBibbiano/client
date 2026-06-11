<?php
$title = get_field('title_falc');
$text  = get_field('description_header_falc');
?>

<section class="hero-falc">

    <?php if ( ! empty( $title ) ) : ?>
        <h1 class="hero-falc__title title">
            <?= esc_html( $title ) ?>
        </h1>
    <?php endif; ?>

    <?php if ( ! empty( $text ) ) : ?>
        <p class="hero-falc__text sub">
            <?= wp_kses_post( $text ) ?>
        </p>
    <?php endif; ?>

</section>