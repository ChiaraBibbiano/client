<?php
$title = get_field('title_teacher_falc');
$text = get_field('text_teacher_falc');
?>

    <section class="section-teacher-falc">
        <h2 class="section-teacher-falc__title"><?= $title ?></h2>
        <p class="section-teacher-falc__text"><?= $text ?></p>
        <a class="section-teacher-falc__btn" href="./template-login">Se connecter</a>
    </section>
<?php
