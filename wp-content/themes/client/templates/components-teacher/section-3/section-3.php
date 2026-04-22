<?php
$title = get_field('title_three');
$sub = get_field('subtitle_three');
$puces = get_field('puces');

?>
<section class="section-2-teacher">
    <h2 class="section-3-teacher__title"><?= $title ?></h2>
    <p class="section-3-teacher__subtitle"><?= $sub ?></p>
    <div class="section-3-teacher__container">
        <?php foreach ($puces as $puce): ?>
            <div class="section-3__puces">
                <p class="section-1__puce">
                    <?= $puce['puce'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>




