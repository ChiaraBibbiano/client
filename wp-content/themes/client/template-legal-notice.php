<?php
/*
 * Template Name: Legal notice
 */

if ( is_user_logged_in() ) {
    get_header('teacher');
} else {
    get_header();
}

$title = get_field('title_legal');
$text   = get_field('text_legal');
?>

    <section class="legal">
        <div class="legal__header">
            <?php if ( $title ) : ?>
                <h2 class="legal__small title"><?= esc_html( $title ); ?></h2>
            <?php endif; ?>
        </div>

        <?php if ( $text ) : ?>
            <div class="legal__body">
                <?= wp_kses_post( $text ); ?>
            </div>
        <?php endif; ?>
    </section>

<?php
if ( is_user_logged_in() ) {
    get_footer('teacher');
} else {
    get_footer();
}
?>