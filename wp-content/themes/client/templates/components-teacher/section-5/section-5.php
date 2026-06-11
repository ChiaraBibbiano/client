<?php
$title = get_field('title_five');
$sub   = get_field('subtitle_five');
$link   = get_field('link_five');

$args = [
    'post_type' => 'sensibilisation',
    'posts_per_page' => 4
];

$sensibilisations = new WP_Query($args);
?>


<section class="section-5" aria-labelledby="section-5-title">
    <?php if ( ! empty( $title ) ) : ?>
        <h2  class="section-5__title title">
            <?= esc_html( $title ) ?>
        </h2>
    <?php endif; ?>
    <div class="section-5__top">
        <?php if ( ! empty( $sub ) ) : ?>
            <p class="section-5__subtitle sub">
                <?= wp_kses_post( $sub ) ?>
            </p>
        <?php endif; ?>
        <?php if ($link) : ?>
            <a class="section-5__link" href="<?= esc_url($link['url']) ?>">
                <?= esc_html($link['title']) ?> <span class="section-5__arrow">↗</span>
            </a>
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
