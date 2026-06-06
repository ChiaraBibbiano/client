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


get_header('teacher');

get_template_part('templates/components-contact/contact');


get_footer('teacher'); ?>