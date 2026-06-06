<?php
$title    = get_field('title_login');
$subtitle = get_field('subtitle_login');
$puces    = get_field('puces_login');
?>

<section class="login">

    <?php if ( ! empty( $title ) ) : ?>
        <h2 class="login__title">
            <?= esc_html( $title ) ?>
        </h2>
    <?php endif; ?>

    <?php if ( ! empty( $subtitle ) ) : ?>
        <p class="login__subtitle">
            <?= wp_kses_post( $subtitle ) ?>
        </p>
    <?php endif; ?>

    <?php if ( ! empty( $puces ) && is_array( $puces ) ) : ?>
        <div class="login__container">
            <?php foreach ( $puces as $index => $puce ) : ?>
                <?php
                $text    = $puce['puce_login'] ?? '';
                // Remplacez 5 par le nombre d'icônes de puces dans votre sprite
                $icon_id = 'puce-' . ( ( $index % 5 ) + 1 );
                ?>
                <?php if ( ! empty( $text ) ) : ?>
                    <div class="login__puce">
                        <svg class="login__puce-icon" aria-hidden="true" focusable="false">
                            <use href="#<?= esc_attr( $icon_id ) ?>"/>
                        </svg>
                        <p class="login__puce-text">
                            <?= esc_html( $text ) ?>
                        </p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>