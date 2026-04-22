<?php
$title = get_field('title_four');
$sub = get_field('subtitle_four');
$cards = get_field('cards_route');
?>

<section class="section-4">
    <h2 class="section-4__title"><?= $title ?></h2>
    <p class="section-4__subtitle"><?= $sub ?></p>
    <div class="section-4__container">
        <?php foreach ($cards as $card): ?>
            <div class="section-4__card">
                <p class="section-1__card-title">
                    <?= $card['title_route'] ?>
                </p>
                <p class="section-4__card-text">
                    <?= $card['text_route'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

