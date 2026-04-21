<?php
$title = get_field('title_two');
$subtitle = get_field('subtitle_two');
$cards = get_field('cards_two');
?>

<section class="section-2">
    <h2 class="section-2__title"><?= $title ?></h2>
    <p class="section-2__subtitle"><?= $subtitle ?></p>
    <div class="section-2__container">
        <?php foreach ($cards as $card): ?>
            <div class="section-2__card">
                <p class="section-2__card-text">
                    <?= $card['card_two'] ?>
                </p>
                <p class="section-2__card-number">
                    <?= $card['number_card_two'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

