<?php
$title = get_field('title_one_falc');
$subtitle = get_field('subtitle_one_falc');
$cards = get_field('card_falc');
?>

<section class="section-1-falc">
    <h2 class="section-1-falc__title"><?= $title ?></h2>
    <p class="section-1-falc__subtitle"><?= $subtitle ?></p>
    <div class="section-1-falc__container">
        <?php foreach ($cards as $card): ?>
            <div class="section-1-falc__card">
                <p class="section-1-falc__card-text">
                    <?= $card['card'] ?>
                </p>
                <p class="section-1-falc__card-number">
                    <?= $card['number_card'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>


