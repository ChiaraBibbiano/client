<?php
$falc = isset($_GET ['falc']) ? sanitize_text_field($_GET ['falc']) : '';
if ($falc === 'true'): ?>
    <?= get_template_part('templates/components/section-2/parts/section-2-falc'); ?>
<?php else: ?>
    <?= get_template_part('templates/components/section-2/parts/section-2'); ?>
<?php endif; ?>