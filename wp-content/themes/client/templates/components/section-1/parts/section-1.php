<?php
$title    = get_field('title_one');
$subtitle = get_field('subtitle_one');
$cards    = get_field('cards');
?>

<section class="section-1">

    <?php if ( ! empty( $title ) ) : ?>
        <h2 class="section-1__title">
            <?= esc_html( $title ) ?>
        </h2>
    <?php endif; ?>

    <?php if ( ! empty( $subtitle ) ) : ?>
        <p class="section-1__subtitle">
            <?= wp_kses_post( $subtitle ) ?>
        </p>
    <?php endif; ?>

    <?php if ( ! empty( $cards ) && is_array( $cards ) ) : ?>
        <div class="section-1__container">
            <?php foreach ( $cards as $card ) : ?>
                <?php
                $card_text   = $card['card']        ?? '';
                $card_number = $card['number_card'] ?? '';
                ?>
                <div class="section-1__card">

                    <?php if ( ! empty( $card_text ) ) : ?>
                        <p class="section-1__card-text">
                            <?= wp_kses_post( $card_text ) ?>
                        </p>
                    <?php endif; ?>

                    <?php if ( ! empty( $card_number ) ) : ?>
                        <p class="section-1__card-number">
                            <?= esc_html( $card_number ) ?>
                        </p>
                    <?php endif; ?>

                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>