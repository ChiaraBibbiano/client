<?php
$title = get_field('title_three_falc');
$text  = get_field('text_three_falc');
?>

<section class="section-3-falc">

    <?php if ( ! empty( $title ) ) : ?>
        <h2 class="section-3-falc__title">
            <?= esc_html( $title ) ?>
        </h2>
    <?php endif; ?>

    <?php if ( ! empty( $text ) ) : ?>
        <p class="section-3-falc__text">
            <?= wp_kses_post( $text ) ?>
        </p>
    <?php endif; ?>

</section>