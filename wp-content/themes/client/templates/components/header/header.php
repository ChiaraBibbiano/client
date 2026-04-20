<?php
$falc = isset($_GET ['falc']) ? sanitize_text_field($_GET ['falc']) : '';
if ($falc === 'true'): ?>
    <?= get_template_part('templates/components/header/parts/header-falc'); ?>
<?php else: ?>
    <?= get_template_part('templates/components/header/parts/header'); ?>
<?php endif; ?>