<?php
$title = get_field('title_teacher');
$text = get_field('text_teacher');
?>

<section class="section-teacher">
    <h2 class="section-teacher__title"><?= $title ?></h2>
    <p class="section-teacher-__text"><?= $text ?></p>
    <a class="section-teacher__btn" href="./template-login">flèche</a>
</section>