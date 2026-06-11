<?php
$title  = get_field('title_two');
$sub1   = get_field('subtitle_two_first');
$sub2   = get_field('subtitle_two_second');
$cards1 = get_field('cards_two_first');
$cards2 = get_field('cards_two_second');
?>

<section class="section-2 section-2-teacher" aria-labelledby="section-2-title">

    <?php if ( ! empty( $title ) ) : ?>
        <h2 class="section-2-teacher__title title">
            <?= esc_html( $title ) ?>
        </h2>
    <?php endif; ?>

    <?php if ( ! empty( $sub1 ) ) : ?>
        <p class="section-2-teacher__subtitle sub">
            <?= wp_kses_post( $sub1 ) ?>
        </p>
    <?php endif; ?>

    <?php if ( ! empty( $cards1 ) && is_array( $cards1 ) ) : ?>
        <ul class="section-2__container section-2-teacher__container" role="list">
            <?php foreach ( $cards1 as $card ) : ?>
                <li class="section-1__card">
                    <?php if ( ! empty( $card['text_card_first'] ) ) : ?>
                        <p class="section-2__card-text">
                            <?= wp_kses_post( $card['text_card_first'] ) ?>
                        </p>
                    <?php endif; ?>
                    <?php if ( ! empty( $card['number_first'] ) ) : ?>
                        <p class="section-1__card-number">
                            <?= esc_html( $card['number_first'] ) ?>
                        </p>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if ( ! empty( $sub2 ) ) : ?>
        <p class="section-2-teacher__subtitleDeux sub">
            <?= wp_kses_post( $sub2 ) ?>
        </p>
    <?php endif; ?>

    <?php if ( ! empty( $cards2 ) && is_array( $cards2 ) ) : ?>
        <ul class="section-2__container section-2-teacher__container" role="list">
            <?php foreach ( $cards2 as $card ) : ?>
                <li class="section-2__card" >
                    <?php if ( ! empty( $card['number_second'] ) ) : ?>
                        <p class="section-2__card-number">
                            <?= esc_html( $card['number_second'] ) ?>
                        </p>
                    <?php endif; ?>
                    <?php if ( ! empty( $card['text_card_second'] ) ) : ?>
                        <p class="section-2__card-text">
                            <?= wp_kses_post( $card['text_card_second'] ) ?>
                        </p>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</section>