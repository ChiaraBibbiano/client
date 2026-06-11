<?php
$title = get_field('title_four');
$sub = get_field('subtitle_four');
$svg = get_field('svg_route');
?>

<section class="section-4" aria-labelledby="section-4-title">

    <?php if (!empty($title)) : ?>
        <h2 id="section-4-title" class="section-4__title title">
            <?= esc_html($title) ?>
        </h2>
    <?php endif; ?>

    <?php if (!empty($sub)) : ?>
        <p class="section-4__subtitle sub">
            <?= wp_kses_post($sub) ?>
        </p>
    <?php endif; ?>

    <div class="section-4__svg"><?php
        if ($svg) :
            echo wp_get_attachment_image(
                    $svg['ID'],
                    'full',
                    false,
                    ['class' => 'teacher__route']
            );
        endif;
        ?></div>


</section>