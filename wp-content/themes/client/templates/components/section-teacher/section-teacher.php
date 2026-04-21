<?php
$falc = isset($_GET ['falc']) ? sanitize_text_field($_GET ['falc']) : '';
if ($falc === 'true'): ?>
    <?= get_template_part('templates/components/section-teacher/parts/section-teacher-falc'); ?>
<?php else: ?>
    <?= get_template_part('templates/components/section-teacher/parts/section-teacher'); ?>
<?php endif; ?>

