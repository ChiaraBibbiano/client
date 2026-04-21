<?php
$title = get_field('title_two_falc');
$subtitle = get_field('subtitle_two_falc');
$title_cards = get_field('cards_title');
$cards = get_field('cards_falc');
?>

<section class="section-2-falc">
    <h2 class="section-2-falc__title"><?= $title ?></h2>
    <p class="section-2-falc__subtitle"><?= $subtitle ?></p>
    <div class="section-2-falc__container">
        <h3 class="section-2-falc__title_cards"> <?= $title_cards ?> </h3>
        <?php foreach ($cards as $card): ?>
            <div class="section-2-falc__cards">
                <p class="section-2-falc__card-text">
                    <?= $card['card'] ?>
                </p>
                <p class="section-1-falc__card-number">
                    <?= $card['number_card'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
