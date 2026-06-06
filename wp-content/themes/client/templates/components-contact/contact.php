<?php
$school_id = \wtl\Helpers::get_current_school_id();
$cardsReferent = get_field('cards', $school_id);
$title1 = get_field('title_one');
$title2 = get_field('title_two');
$text = get_field('text');
?>
<section class="contact">
    <section class="contact" aria-labelledby="contact-title">
        <div class="contact__container">

            <?php if ($title1) : ?>
                <h1 id="contact-title" class="contact__title1">
                    <?= esc_html($title1) ?>
                </h1>
            <?php endif; ?>

            <?php if ($title2) : ?>
                <h2 class="contact__title2">
                    <?= esc_html($title2) ?>
                </h2>
            <?php endif; ?>

            <?php if (!empty($cardsReferent)) : ?>
                <ul class="contact__cards" role="list">
                    <?php foreach ($cardsReferent as $card) : ?>
                        <li class="contact__card">
                            <?php if (!empty($card['title'])) : ?>
                                <h3 class="contact__card-title">
                                    <?= esc_html($card['title']) ?>
                                </h3>
                            <?php endif; ?>
                            <?php if (!empty($card['text'])) : ?>
                                <p class="contact__card-text">
                                    <?= wp_kses_post($card['text']) ?>
                                </p>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>

        <?php if ($text) : ?>
            <aside class="contact__side" aria-label="Information complémentaire">
                <p class="contact__side-text">
                    <?= wp_kses_post($text) ?>
                </p>
            </aside>
        <?php endif; ?>
    </section>

