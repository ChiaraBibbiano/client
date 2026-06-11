<?php
$title          = get_field('title_teacher_falc');
$text           = get_field('text_teacher_falc');
$connexion_page = get_page_by_path('connexion');
$connexion_url  = $connexion_page
        ? get_permalink( $connexion_page->ID )
        : home_url('/template-login/');
?>

<section class="section-teacher-falc">
<div class="section-teacher-falc__container">
    <?php if ( ! empty( $title ) ) : ?>
    <h2 class="section-teacher-falc__title title">
        <?= esc_html( $title ) ?>
    </h2>
    <?php endif; ?>

    <?php if ( ! empty( $text ) ) : ?>
    <p class="section-teacher-falc__text sub">
        <?= wp_kses_post( $text ) ?>
    </p>
    <?php endif; ?>
    <a class="section-teacher-falc__btn" href="<?= esc_url( $connexion_url ) ?>">
        Se connecter
    </a>
</div >

</section>