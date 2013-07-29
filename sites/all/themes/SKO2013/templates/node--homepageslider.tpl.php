<?php if (!empty($content['field_link'])) : ?>
    <a href="<?php print render($content['field_link']); ?>" target="_blank" >
<?php endif; ?>

    <?php print render($content['field_afbeelding']); ?>

    <?php if ($node->field_toon_titel['und'][0]['value'] == '1'): ?>
        <span class="slider-item-caption"><?php print $title; ?></span>
    <?php endif; ?>

<?php if (!empty($content['field_link'])) : ?>
    </a>
<?php endif; ?>