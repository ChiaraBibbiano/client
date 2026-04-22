<?php
$title1 = get_field('title');
$title2 = get_field('title_sub');
$sub = get_field('subtitle');
$img = get_field('photo_fille');
?>
<section class="hero-teacher">
    <h1 class="hero-teacher__title">
        <?= $title1 ?>
    </h1>
    <h2 class="hero-teacher__title">
        <?= $title2 ?>
    </h2>
    <p class="=hero-teacher__sub">
        <?= $sub ?>
    </p>
    <img src="" alt="">

</section>



