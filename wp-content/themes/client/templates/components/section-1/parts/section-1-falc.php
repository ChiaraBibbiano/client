<?php
$title       = get_field('title_one_falc');
$subtitle    = get_field('subtitle_one_falc');
$title_cards = get_field('cards_title');
$cards       = get_field('cards_falc');
?>

<section class="section-1-falc">

    <?php if ( ! empty( $title ) ) : ?>
        <h2 class="section-1-falc__title">
            <?= esc_html( $title ) ?>
        </h2>
    <?php endif; ?>

    <?php if ( ! empty( $subtitle ) ) : ?>
        <p class="section-1-falc__subtitle">
            <?= wp_kses_post( $subtitle ) ?>
        </p>
    <?php endif; ?>

    <?php if ( ! empty( $cards ) && is_array( $cards ) ) : ?>
        <div class="section-1-falc__container">

            <?php if ( ! empty( $title_cards ) ) : ?>
                <h3 class="section-1-falc__title-cards">
                    <?= esc_html( $title_cards ) ?>
                </h3>
            <?php endif; ?>

            <?php foreach ( $cards as $card ) : ?>
                <?php
                $card_text   = $card['card_falc']        ?? '';
                $card_number = $card['number_card_falc'] ?? '';
                ?>
                <div class="section-1-falc__cards">

                    <?php if ( ! empty( $card_text ) ) : ?>
                        <p class="section-1-falc__card-text">
                            <?= wp_kses_post( $card_text ) ?>
                        </p>
                    <?php endif; ?>

                    <?php if ( ! empty( $card_number ) ) : ?>
                        <p class="section-1-falc__card-number">
                            <?= esc_html( $card_number ) ?>
                        </p>
                    <?php endif; ?>

                </div>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>

</section>