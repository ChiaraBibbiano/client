<?php
$title          = get_field('title_teacher');
$text           = get_field('text_teacher');
$connexion_page = get_page_by_path('connexion');
$connexion_url  = $connexion_page
        ? get_permalink( $connexion_page->ID )
        : home_url('/template-login/');
?>

<section class="section-teacher">

    <?php if ( ! empty( $title ) ) : ?>
        <h2 class="section-teacher__title">
            <?= esc_html( $title ) ?>
        </h2>
    <?php endif; ?>

    <?php if ( ! empty( $text ) ) : ?>
        <p class="section-teacher__text">
            <?= wp_kses_post( $text ) ?>
        </p>
    <?php endif; ?>

    <a class="section-teacher__btn" href="<?= esc_url( $connexion_url ) ?>" aria-label="Accéder à mon espace connexion">
        <svg aria-hidden="true" focusable="false">
            <use href="#fleche-btn"/>
        </svg>
    </a>

</section>