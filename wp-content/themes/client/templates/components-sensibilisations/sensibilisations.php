<?php

$title    = get_field('title_sensi');
$pretitle = get_field('pretitle_sensi');

$taxonomy = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : '';
$paged    = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = [
    'post_type'      => 'sensibilisation',
    'posts_per_page' => 8,
    'paged'          => $paged,
    'no_found_rows'  => false,
];

if ($taxonomy !== '') {
    $args['tax_query'] = [
        [
            'taxonomy' => 'type',
            'field'    => 'slug',
            'terms'    => $taxonomy,
        ],
    ];
}

$sensibilisations = new WP_Query($args);
$page_url = get_permalink();
?>

<section class="sensi" aria-labelledby="sensi-title">

    <nav class="sensi__nav" aria-label="<?= esc_attr__('Filtrer les sensibilisations', 'textdomain') ?>">
        <ul role="list">
            <li class="sensi__filtre <?= ($taxonomy === '') ? 'sensi__filtre--active' : '' ?>">
                <a href="<?= esc_url($page_url) ?>" <?= ($taxonomy === '') ? 'aria-current="page"' : '' ?>>
                    Toutes
                </a>
            </li>
            <li class="sensi__filtre <?= ($taxonomy === 'approches_contextes') ? 'sensi__filtre--active' : '' ?>">
                <a href="<?= esc_url(add_query_arg('filter', 'approches_contextes', $page_url)) ?>"
                    <?= ($taxonomy === 'approches_contextes') ? 'aria-current="page"' : '' ?>>
                    Approches et contextes
                </a>
            </li>
            <li class="sensi__filtre <?= ($taxonomy === 'pratiques-pedagogiques') ? 'sensi__filtre--active' : '' ?>">
                <a href="<?= esc_url(add_query_arg('filter', 'pratiques-pedagogiques', $page_url)) ?>"
                    <?= ($taxonomy === 'pratiques-pedagogiques') ? 'aria-current="page"' : '' ?>>
                    Pratiques pédagogiques
                </a>
            </li>
            <li class="sensi__filtre <?= ($taxonomy === 'troubles_apprentissage') ? 'sensi__filtre--active' : '' ?>">
                <a href="<?= esc_url(add_query_arg('filter', 'troubles_apprentissage', $page_url)) ?>"
                    <?= ($taxonomy === 'troubles_apprentissage') ? 'aria-current="page"' : '' ?>>
                    Troubles de l'apprentissage
                </a>
            </li>
            <li class="sensi__filtre <?= ($taxonomy === 'troubles_neurodeveleppementaux') ? 'sensi__filtre--active' : '' ?>">
                <a href="<?= esc_url(add_query_arg('filter', 'troubles_neurodeveleppementaux', $page_url)) ?>"
                    <?= ($taxonomy === 'troubles_neurodeveleppementaux') ? 'aria-current="page"' : '' ?>>
                    Troubles neurodéveleppementaux
                </a>
            </li>
        </ul>
    </nav>

    <div class="sensi__header">
        <?php if ($pretitle) : ?>
            <h2 id="sensi-title" class="sensi__pretitle">
                <?= esc_html($pretitle) ?>
            </h2>
        <?php endif; ?>
        <?php if ($title) : ?>
            <p class="sensi__title">
                <?= esc_html($title) ?>
            </p>
        <?php endif; ?>
    </div>

    <?php if ($sensibilisations->have_posts()) : ?>
        <ul class="sensi__cards" role="list">
            <?php while ($sensibilisations->have_posts()) : $sensibilisations->the_post(); ?>
                <?php
                $type  = get_field('type_sensi');
                $intro = get_field('intro_sensi');
                $file1 = get_field('file_1');
                $file2 = get_field('file_2');
                $file3 = get_field('file_3');
                ?>
                <li class="sensi__card">
                    <?php if ($type) : ?>
                        <p class="sensi__card-type">
                            <?= esc_html($type) ?>
                        </p>
                    <?php endif; ?>

                    <h3 class="sensi__card-title">
                        <?= esc_html(get_the_title()) ?>
                    </h3>

                    <?php if ($intro) : ?>
                        <div class="sensi__card-intro">
                            <?= wp_kses_post($intro) ?>
                        </div>
                    <?php endif; ?>
                    <?php
                    $files = array_filter([$file1, $file2, $file3]);
                    if (!empty($files)) : ?>
                    <ul class="sensi__card-files" role="list">
                        <?php foreach ($files as $file) : ?>
                            <li>
                                <a href="<?= esc_url($file['url']) ?>"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   aria-label="<?= esc_attr('Télécharger ' . $file['filename']) ?>">
                                    <?= esc_html($file['filename']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <a href="<?= esc_url(get_permalink()) ?>" class="sensi__card-link">
                        Voir la sensibilisation
                    </a>
                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    <?php else : ?>
        <p class="sensi__empty">Aucune sensibilisation trouvée.</p>
    <?php endif; ?>

</section>