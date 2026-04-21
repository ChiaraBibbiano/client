<?php
/*
 * Template Name: Contact
 */

if (!\wtl\Authentication::is_logged_in()) {
    wp_safe_redirect(home_url('/connexion/'));
    exit;
}

if (!\wtl\Authentication::has_school_access()) {
    wp_safe_redirect(home_url('/mon-espace/'));
    exit;
}

$school_id = \wtl\Helpers::get_current_school_id();
$cardsReferent = get_field('cards', $school_id);
$title1 = get_field('title_one');
$title2 = get_field('title_two');
$text = get_field('text');

?>
<?php get_header(); ?>
<section class="contact">
    <div class="contact__container">
        <h1 class="contact__title1"><?= $title1 ?> </h1>
        <h2 class="contact__title1"><?= $title2 ?></h2>
        <div class="contact__cards">
            <?php foreach ($cardsReferent as $card): ?>
                <div>
                    <?= $card['title'] ?>
                    <?= $card['text'] ?>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
    <div class="contact__side">
        <p class="contact__side-text"> <?= $text ?> </p>
    </div>
</section>




<?php get_footer(); ?>