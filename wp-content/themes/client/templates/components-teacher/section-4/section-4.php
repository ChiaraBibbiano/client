<?php
$title = get_field('title_four');
$sub   = get_field('subtitle_four');
$cards = get_field('cards_route');
?>

<section class="section-4" aria-labelledby="section-4-title">

    <?php if ( ! empty( $title ) ) : ?>
        <h2 id="section-4-title" class="section-4__title">
            <?= esc_html( $title ) ?>
        </h2>
    <?php endif; ?>

    <?php if ( ! empty( $sub ) ) : ?>
        <p class="section-4__subtitle">
            <?= wp_kses_post( $sub ) ?>
        </p>
    <?php endif; ?>

    <?php if ( ! empty( $cards ) && is_array( $cards ) ) : ?>
        <ul class="section-4__container" role="list">
            <?php foreach ( $cards as $card ) : ?>
                <li class="section-4__card">
                    <?php if ( ! empty( $card['title_route'] ) ) : ?>
                        <h3 class="section-4__card-title">
                            <?= esc_html( $card['title_route'] ) ?>
                        </h3>
                    <?php endif; ?>
                    <?php if ( ! empty( $card['text_route'] ) ) : ?>
                        <p class="section-4__card-text">
                            <?= wp_kses_post( $card['text_route'] ) ?>
                        </p>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</section>