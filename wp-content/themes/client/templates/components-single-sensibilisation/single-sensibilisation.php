<?php
get_header('teacher');

$page_id = get_the_ID();

while (have_posts()) : the_post();

    $type              = get_field('type_sensi');
    $intro             = get_field('intro_sensi');
    $file_1            = get_field('file_1');
    $file_2            = get_field('file_2');
    $file_3            = get_field('file_3');
    $about             = get_field('about');
    $about_text        = get_field('about_text');
    $signes            = get_field('signes');
    $puces_signes      = get_field('puces_signes');
    $amenagement_title = get_field('amenagement_title');
    $amenagements      = get_field('amenagements');
    $ressource         = get_field('ressource_title');
    ?>

    <article class="sensi-single">

        <?php if ( $type ) : ?>
            <p class="sensi-single__type">
                <?= esc_html( $type ) ?>
            </p>
        <?php endif; ?>

        <h2 class="sensi-single__title title">
            <?= esc_html( get_the_title() ) ?>
        </h2>

        <?php if ( $intro ) : ?>
            <div class="sensi-single__intro sub">
                <?= wp_kses_post( $intro ) ?>
            </div>
        <?php endif; ?>

        <?php if ( $about ) : ?>
            <p class="sensi-single__about">
                <?= esc_html( $about ) ?>
            </p>
        <?php endif; ?>

        <?php if ( $about_text ) : ?>
            <div class="sensi-single__about-text">
                <?= wp_kses_post( $about_text ) ?>
            </div>
        <?php endif; ?>

        <?php if ( $signes ) : ?>
            <h3 class="sensi-single__signes">
                <?= esc_html( $signes ) ?>
            </h3>
        <?php endif; ?>

        <?php if ( ! empty( $puces_signes ) && is_array( $puces_signes ) ) : ?>
            <ul class="section-3-teacher__container" role="list">
                <?php foreach ( $puces_signes as $puce ) : ?>
                    <?php if ( ! empty( $puce['puce'] ) ) : ?>
                        <li class="section-3-teacher__puce">
                            <svg aria-hidden="true" focusable="false" role="presentation"
                                 class="section-3-teacher__puce-icon">
                                <use href="#deco-puce"/>
                            </svg>
                            <?= wp_kses_post( $puce['puce'] ) ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if ( $amenagement_title ) : ?>
            <h3 class="sensi-single__amenagement-title">
                <?= esc_html( $amenagement_title ) ?>
            </h3>

            <?php if ( ! empty( $amenagements ) && is_array( $amenagements ) ) : ?>
                <ul class="section-3-teacher__container" role="list">
                    <?php foreach ( $amenagements as $amenagement ) : ?>
                        <?php if ( ! empty( $amenagement['amenagement'] ) ) : ?>
                            <li class="section-3-teacher__puce">
                                <svg aria-hidden="true" focusable="false" role="presentation"
                                     class="section-3-teacher__puce-icon">
                                    <use href="#deco-puce"/>
                                </svg>
                                <?= wp_kses_post( $amenagement['amenagement'] ) ?>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        <?php endif; ?>

        <?php if ( $ressource ) : ?>
            <p class="sensi-single__ressource-title">
                <?= esc_html( $ressource ) ?>
            </p>
        <?php endif; ?>

        <?php
        $files = array_filter( [ $file_1, $file_2, $file_3 ] );
        if ( ! empty( $files ) ) : ?>
            <ul class="sensi__card-files sensi-single__card-files" role="list">
                <?php foreach ( $files as $file ) : ?>
                    <li>
                        <a href="<?= esc_url( $file['url'] ) ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           aria-label="<?= esc_attr( 'Télécharger ' . $file['filename'] ) ?>">
                            <?= esc_html( $file['filename'] ) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </article>

<?php endwhile; ?>

<?php
$title = get_field('title_five', $page_id);
$sub   = get_field('subtitle_five', $page_id);
$link  = get_field('link_five', $page_id);

$args = [
        'post_type'      => 'sensibilisation',
        'posts_per_page' => 4,
];

$sensibilisations = new WP_Query( $args );
?>
    <section class="section-5" aria-labelledby="section-5-title">

        <?php if ( ! empty( $title ) ) : ?>
            <h2 class="section-5__title title">
                <?= esc_html( $title ) ?>
            </h2>
        <?php endif; ?>

        <div class="section-5__top">
            <?php if ( ! empty( $sub ) ) : ?>
                <p class="section-5__subtitle sub">
                    <?= wp_kses_post( $sub ) ?>
                </p>
            <?php endif; ?>

            <?php if ( $link ) : ?>
                <a class="section-5__link" href="<?= esc_url( $link['url'] ) ?>">
                    <?= esc_html( $link['title'] ) ?> <span class="section-5__arrow">↗</span>
                </a>
            <?php endif; ?>
        </div>

        <?php if ( $sensibilisations->have_posts() ) : ?>
            <ul class="sensi__cards" role="list">
                <?php while ( $sensibilisations->have_posts() ) : $sensibilisations->the_post(); ?>
                    <?php
                    $type  = get_field('type_sensi');
                    $intro = get_field('intro_sensi');
                    $file1 = get_field('file_1');
                    $file2 = get_field('file_2');
                    $file3 = get_field('file_3');
                    ?>
                    <li class="sensi__card">

                        <?php if ( $type ) : ?>
                            <p class="sensi__card-type">
                                <?= esc_html( $type ) ?>
                            </p>
                        <?php endif; ?>

                        <h3 class="sensi__card-title">
                            <?= esc_html( get_the_title() ) ?>
                        </h3>

                        <?php if ( $intro ) : ?>
                            <div class="sensi__card-intro">
                                <?= wp_kses_post( $intro ) ?>
                            </div>
                        <?php endif; ?>

                        <?php
                        $files = array_filter( [ $file1, $file2, $file3 ] );
                        if ( ! empty( $files ) ) : ?>
                            <ul class="sensi__card-files" role="list">
                                <?php foreach ( $files as $file ) : ?>
                                    <li>
                                        <a href="<?= esc_url( $file['url'] ) ?>"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           aria-label="<?= esc_attr( 'Télécharger ' . $file['filename'] ) ?>">
                                            <?= esc_html( $file['filename'] ) ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <a href="<?= esc_url( get_permalink() ) ?>" class="sensi__card-link">
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

<?php get_footer('teacher'); ?>