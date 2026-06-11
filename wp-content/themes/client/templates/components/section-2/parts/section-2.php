<?php
$title = get_field('title_two');
$subtitle = get_field('subtitle_two');
$cards = get_field('cards_two');
?>

<section class="section-2">

    <?php if (!empty($title)) : ?>
        <h2 class="section-2__title title">
            <?= esc_html($title) ?>
        </h2>
    <?php endif; ?>

    <?php if (!empty($subtitle)) : ?>
        <p class="section-2__subtitle sub">
            <?= wp_kses_post($subtitle) ?>
        </p>
    <?php endif; ?>

    <?php if (!empty($cards) && is_array($cards)) : ?>
        <div class="section-2__container">
            <?php foreach ($cards as $card) : ?>
                <?php
                $card_text = $card['card_two'] ?? '';
                $card_number = $card['number_card_two'] ?? '';
                ?>
                <div class="section-2__card">
                    <?php if (!empty($card_number)) : ?>
                        <p class="section-2__card-number">
                            <?= esc_html($card_number) ?>
                        </p>
                    <?php endif; ?>
                    <?php if (!empty($card_text)) : ?>
                        <p class="section-2__card-text">
                            <?= wp_kses_post($card_text) ?>
                        </p>
                    <?php endif; ?>


                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>