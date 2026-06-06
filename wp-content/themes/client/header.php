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
<header>
    <nav class="navigation">
        <h2 class="navigation__title sro">Menu de navigation</h2>
        <a href="<?= esc_url( home_url('/') ) ?>" class="navigation__logo">
            <svg aria-label="Logo PLAI" role="img">
                <use href="#logo"/>
            </svg>
        </a>
        <ul class="navigation__list">
            <?php
            if (is_front_page()):
                $falc = isset($_GET['falc']) ? sanitize_text_field($_GET['falc']) : '';
                ?>
                <li class="navigation__list-item">
                    <a class="navigation__link"
                       href="<?= $falc === 'true' ? '/' : '/?falc=true' ?>"><?= $falc === 'true' ? esc_html('Mode normal') : esc_html('Cliquez ici pour le facile à lire et à comprendre (FALC)') ?></a>
                </li>
            <?php endif; ?>
            <li class="navigation__list-item">
                <a class="navigation__link navigation__link--login"
                   href="<?= get_permalink(get_page_by_path('connexion')); ?>">
                    Mon espace
                </a>
            </li>
        </ul>
    </nav>
</header>



