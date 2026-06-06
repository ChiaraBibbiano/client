<?php
/*
 * Template Name: Single sensibilisation
 * single-project.php
 */



get_header('teacher');

if (!\wtl\Authentication::is_logged_in()) {
    wp_safe_redirect(home_url('/connexion/'));
    exit;
}


get_template_part('templates/components-single-sensibilisation/single-sensibilisation');

get_footer('teacher');


