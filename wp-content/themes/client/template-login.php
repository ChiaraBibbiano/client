<?php
/*
Template Name: Login template
*/
?>

<?php get_header(); ?>

<?php \wtl\Helpers::render_partial('login-form.php'); ?>
<?= get_template_part('templates/components/login/login'); ?>

<?php get_footer(); ?>