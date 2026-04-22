<?php
$title = get_field('title');
$text = get_field('description_header');
$illustration = get_field('illustration_hero');
?>


<section class="hero">
    <h1 class="hero__title">
        <?= $title ?>
    </h1>
    <p class="=hero__text">
        <?= $text ?>
    </p>
    <div>

    </div>
</section>



