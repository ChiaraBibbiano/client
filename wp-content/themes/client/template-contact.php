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

?>
<?php get_header(); ?>

<?php foreach ($cardsReferent as $card): ?>
    <div>
        <?= $card['title'] ?>
        <?= $card['text'] ?>
    </div>
<?php endforeach; ?>


<?php get_footer(); ?>