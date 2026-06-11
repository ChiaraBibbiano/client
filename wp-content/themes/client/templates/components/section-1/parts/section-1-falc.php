<?php
$title = get_field('title_one_falc');
$subtitle = get_field('subtitle_one_falc');
$title_cards = get_field('cards_title');
$cards = get_field('cards_falc');
?>

<section class="section-1-falc">

    <?php if (!empty($title)) : ?>
        <h2 class="section-1-falc__title title">
            <?= esc_html($title) ?>
        </h2>
    <?php endif; ?>

    <?php if (!empty($subtitle)) : ?>
        <p class="section-1-falc__subtitle sub">
            <?= wp_kses_post($subtitle) ?>
        </p>
    <?php endif; ?>

    <div class="section-1-falc__container">
        <?php if (!empty($title_cards)) : ?>
            <h3 class="section-1-falc__title-cards">
                <?= esc_html($title_cards) ?>
            </h3>
        <?php endif; ?>
        <?php if (!empty($cards)) : ?>
            <p class="section-1-falc__cards">
                <?= wp_kses_post($cards) ?>
            </p>
        <?php endif; ?>
    </div>

</section>