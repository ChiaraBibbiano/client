<?php
$title = get_field('title_two');
$sub1 = get_field('subtitle_two_first');
$sub2 = get_field('subtitle_two_second');
$cards1 = get_field('cards_two_first');
$cards2 = get_field('cards_two_second');
?>

<section class="section-2">
    <h2 class="section-2__title"><?= $title ?></h2>
    <p class="section-2__subtitle"><?= $sub1 ?></p>
    <div class="section-2__container">
        <?php foreach ($cards1 as $card): ?>
            <div class="section-2__card">
                <p class="section-1__card-text">
                    <?= $card['text_card_first'] ?>
                </p>
                <p class="section-2__card-number">
                    <?= $card['number_first'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
    <p class="section-2__subtitle"><?= $sub2 ?></p>
    <div class="section-2__container">
        <?php foreach ($cards2 as $card): ?>
            <div class="section-2__card">
                <p class="section-2__card-number">
                    <?= $card['number_second'] ?>
                </p>
                <p class="section-2__card-text">
                    <?= $card['text_card_second'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

