<?php
$title = get_field('title_one');
$sub   = get_field('subtitle_one');
$cards = get_field('cards_one');
?>

<section class="section-1-teacher section-1" aria-labelledby="section-1-teacher-title">

    <?php if ( ! empty( $title ) ) : ?>
        <h2  class="section-1-teacher__title title">
            <?= esc_html( $title ) ?>
        </h2>
    <?php endif; ?>

    <?php if ( ! empty( $sub ) ) : ?>
        <p class="section-1-teacher__subtitle sub">
            <?= wp_kses_post( $sub ) ?>
        </p>
    <?php endif; ?>

    <?php if ( ! empty( $cards ) && is_array( $cards ) ) : ?>
        <ul class="section-1-teacher__container" role="list">
            <?php foreach ( $cards as $card ) : ?>
                <?php if ( ! empty( $card['card_one'] ) ) : ?>
                    <li class="section-1-teacher__card">
                        <p class="section-1-teacher__card-text">
                            <?= wp_kses_post( $card['card_one'] ) ?>
                        </p>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <svg class="section-1-teacher__regle-t" aria-hidden="true" focusable="false" role="presentation">
        <use href="#deco-regles"/>
    </svg>
</section>