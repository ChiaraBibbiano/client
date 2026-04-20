<?php
/*
Template Name: sensibilisations
*/
// Je viens définir mon tableau d'arguments pour constituer ma QUERY
$args = [
    'post_type' => 'sensibilisation',
];

$sensibilisations = new WP_Query($args);
?>

<?php get_header(); ?>

<?php if ($sensibilisations->have_posts()) : while ($sensibilisations->have_posts()): $sensibilisations->the_post(); ?>
    <div>
        <?= get_the_title(); ?>
    </div>
<?php endwhile; else: ?>
    <p> Aucune sensibilisation </p>
<?php endif; ?>

<?php get_footer(); ?>
