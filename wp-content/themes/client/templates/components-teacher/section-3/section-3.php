<?php
$title = get_field('title_three');
$sub   = get_field('subtitle_three');
$puces = get_field('puces');
?>

<section class="section-3-teacher" aria-labelledby="section-3-teacher-title">

    <?php if ( ! empty( $title ) ) : ?>
        <h2 id="section-3-teacher-title" class="section-3-teacher__title">
            <?= esc_html( $title ) ?>
        </h2>
    <?php endif; ?>

    <?php if ( ! empty( $sub ) ) : ?>
        <p class="section-3-teacher__subtitle">
            <?= wp_kses_post( $sub ) ?>
        </p>
    <?php endif; ?>

    <?php if ( ! empty( $puces ) && is_array( $puces ) ) : ?>
        <ul class="section-3-teacher__container" role="list">
            <?php foreach ( $puces as $puce ) : ?>
                <?php if ( ! empty( $puce['puce'] ) ) : ?>
                    <li class="section-3-teacher__puce">
                        <?= wp_kses_post( $puce['puce'] ) ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</section>