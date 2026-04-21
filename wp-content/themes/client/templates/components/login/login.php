<?php
$title = get_field('title_login');
$subtitle = get_field('subtitle_login');
$puces = get_field('puces_login');
?>

<section class="login">
    <h2 class="login__title"><?= $title ?></h2>
    <p class="login__subtitle"><?= $subtitle ?></p>
    <div class="login__container">
        <?php foreach ($puces as $puce): ?>
            <div class="login__puces">
                <p class="login__puce-text">
                    <?= $puce['puce_login'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
