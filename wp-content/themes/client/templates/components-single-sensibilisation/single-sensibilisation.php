<?php
get_header('teacher');

while (have_posts()) : the_post();

    $type   = get_field('type_sensi');
    $intro  = get_field('intro_sensi');
    $file_1 = get_field('file_1');
    $file_2 = get_field('file_2');
    $file_3 = get_field('file_3');
    ?>

    <article class="sensi-single">

        <?php if ($type) : ?>
            <p class="sensi-single__type">
                <?= esc_html($type) ?>
            </p>
        <?php endif; ?>

        <h2 class="sensi-single__title">
            <?= esc_html(get_the_title()) ?>
        </h2>

        <?php if ($intro) : ?>
            <div class="sensi-single__intro">
                <?= wp_kses_post($intro) ?>
            </div>
        <?php endif; ?>

        <?php
        $files = array_filter([$file_1, $file_2, $file_3]);
        if (!empty($files)) : ?>
            <ul class="sensi-single__files" role="list">
                <?php foreach ($files as $file) : ?>
                    <li>
                        <a href="<?= esc_url($file['url']) ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           aria-label="<?= esc_attr('Télécharger ' . $file['filename']) ?>">
                            <?= esc_html($file['filename']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </article>

<?php endwhile;

get_footer('teacher');
?>