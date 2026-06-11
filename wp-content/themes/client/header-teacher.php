<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description"
          content="site internet pour Le Pôle Liégeois d’Accompagnement vers une École Inclusive (PLAI)">
    <meta name="author" content="Chiara Bibbiano">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= esc_html(get_the_title()); ?>PLAI</title>
    <link rel="stylesheet" type="text/css" href="<?= esc_url(dw_asset('css')); ?>">
    <script src="<?= esc_url(dw_asset('js')); ?>" defer></script>
</head>

<body>
<?php
$sprite_path = get_template_directory() . '/assets/icons/sprite.svg';
if (file_exists($sprite_path)) {
    include $sprite_path;
} ?>
<h1 class="sro"><?= esc_html( get_the_title() ) ?></h1>
<header class="sticky">
    <nav class="navigation">
        <h2 class="navigation__title sro">Menu de navigation</h2>
        <a href="<?= esc_url( home_url('/mon-espace/') ) ?>" >
            <svg aria-label="Logo PLAI" role="img" class="navigation__logo">
                <use href="#logo"/>
            </svg>
        </a>
        <button class="navigation__burger"
                aria-expanded="false"
                aria-controls="navigation-menu"
                aria-label="<?= esc_attr__('Ouvrir le menu', 'plai') ?>">
            <span class="navigation__burger-bar" aria-hidden="true"></span>
            <span class="navigation__burger-bar" aria-hidden="true"></span>
            <span class="navigation__burger-bar" aria-hidden="true"></span>
        </button>
        <ul class="navigation__list" id="navigation-menu">
            <?php foreach (dw_get_navigation_links('header-teacher') as $link) : ?>
                <li class="navigation__list-item">
                    <a class="navigation__link-t"
                       href="<?= esc_url($link->href) ?>"
                            <?= esc_url($link->href) === esc_url(get_permalink()) ? 'aria-current="page"' : '' ?>>
                        <?= esc_html($link->label) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

