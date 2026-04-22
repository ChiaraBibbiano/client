<?php
$title = get_field('title_one');
$sub = get_field('subtitle_one');
$cards = get_field('cards_one');

?>
<section class="section-1-teacher">
    <h2 class="section-1-teacher__title"><?= $title ?></h2>
    <p class="section-1-teacher__subtitle"><?= $sub ?></p>
    <div class="section-1-teacher__container">
        <?php foreach ($cards as $card): ?>
            <div class="section-1__card">
                <p class="section-1__card-text">
                    <?= $card['card_one'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>




