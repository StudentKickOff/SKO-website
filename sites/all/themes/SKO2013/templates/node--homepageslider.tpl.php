<?php print render($content['field_afbeelding']); ?>

<?php if ($node->field_toon_titel['und'][0]['value'] == '1'): ?>
    <span class="slider-item-caption"><?php print $title; ?></span>
<?php endif; ?>