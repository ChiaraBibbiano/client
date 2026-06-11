<?php

$title = get_field('title_sensi');
$pretitle = get_field('pretitle_sensi');

$taxonomy = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : '';
$paged = isset($_GET['sensi_page']) ? max(1, absint($_GET['sensi_page'])) : 1;

$args = [
        'post_type' => 'sensibilisation',
        'posts_per_page' => 4,
        'paged' => $paged,
        'no_found_rows' => false,
];

if ($taxonomy !== '') {
    $args['tax_query'] = [
            [
                    'taxonomy' => 'type',
                    'field' => 'slug',
                    'terms' => $taxonomy,
            ],
    ];
}

$sensibilisations = new WP_Query($args);
$page_url = get_permalink();
?>

<section class="sensi" aria-labelledby="sensi-title">
    <div class="sensi__header">
        <?php if ($pretitle) : ?>
            <h2 class="sensi__pretitle title">
                <?= esc_html($pretitle) ?>
            </h2>
        <?php endif; ?>
        <?php if ($title) : ?>
            <p class="sensi__title sub">
                <?= esc_html($title) ?>
            </p>
        <?php endif; ?>
    </div>
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
            <li class="sensi__filtre <?= ($taxonomy === 'Maths') ? 'sensi__filtre--active' : '' ?>">
                <a href="<?= esc_url(add_query_arg('filter', 'Maths', $page_url)) ?>"
                        <?= ($taxonomy === 'Maths') ? 'aria-current="page"' : '' ?>>
                    Maths
                </a>
            </li>
            <li class="sensi__filtre <?= ($taxonomy === 'Musique') ? 'sensi__filtre--active' : '' ?>">
                <a href="<?= esc_url(add_query_arg('filter', 'Musique', $page_url)) ?>"
                        <?= ($taxonomy === 'Musique') ? 'aria-current="page"' : '' ?>>
                    Musique
                </a>
            </li>
            <li class="sensi__filtre <?= ($taxonomy === 'Vidéo youtube sans pub') ? 'sensi__filtre--active' : '' ?>">
                <a href="<?= esc_url(add_query_arg('filter', 'Vidéo youtube sans pub', $page_url)) ?>"
                        <?= ($taxonomy === 'Vidéo youtube sans pub') ? 'aria-current="page"' : '' ?>>
                    Vidéo youtube sans pub
                </a>
            </li>
        </ul>
    </nav>


    <?php if ($sensibilisations->have_posts()) : ?>
        <ul class="sensi__cards" role="list">
            <?php while ($sensibilisations->have_posts()) : $sensibilisations->the_post(); ?>
                <?php
                $type = get_field('type_sensi');
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

    <?php if ($sensibilisations->max_num_pages > 1) : ?>
        <?php
        $pagination_base_url = get_permalink();

        $query_args = [];

        if ($taxonomy !== '') {
            $query_args['filter'] = $taxonomy;
        }
        ?>

        <nav class="pagination" aria-label="<?= esc_attr('Navigation entre les pages'); ?>">
            <div class="pagination__prev" title="<?= esc_attr('Vers la page précédente'); ?>">
                <?php if ($paged > 1) : ?>
                    <?php
                    $prev_args = $query_args;
                    $prev_args['sensi_page'] = $paged - 1;
                    ?>
                    <a href="<?= esc_url(add_query_arg($prev_args, $pagination_base_url)); ?>">
                    <span class="link">
                        Précédent <span class="arrow" aria-hidden="true">↙</span>
                    </span>
                    </a>
                <?php endif; ?>
            </div>

            <div class="pagination__next" title="<?= esc_attr('Vers la page suivante'); ?>">
                <?php if ($paged < $sensibilisations->max_num_pages) : ?>
                    <?php
                    $next_args = $query_args;
                    $next_args['sensi_page'] = $paged + 1;
                    ?>
                    <a href="<?= esc_url(add_query_arg($next_args, $pagination_base_url)); ?>">
                    <span class="link">
                        Suivant <span class="arrow" aria-hidden="true">↗</span>
                    </span>
                    </a>
                <?php endif; ?>
            </div>

        </nav>
    <?php endif; ?>

</section>