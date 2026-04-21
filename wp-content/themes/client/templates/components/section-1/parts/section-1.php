<?php
$title = get_field('title_one');
$subtitle = get_field('subtitle_one');
$cards = get_field('cards');
?>

<section class="section-1">
    <h2 class="section-1__title"><?= $title ?></h2>
    <p class="section-1__subtitle"><?= $subtitle ?></p>
    <div class="section-1__container">
        <?php foreach ($cards as $card): ?>
            <div class="section-1__card">
                <p class="section-1__card-text">
                    <?= $card['card'] ?>
                </p>
                <p class="section-1__card-number">
                    <?= $card['number_card'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
