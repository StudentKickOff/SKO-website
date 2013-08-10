<article class="white-background detail-full-item history-item">
    <a href="#" class="history-item-toggle"><?php print $title; ?></a>
    <div class="detail-container">
        <p>
            <?php print render($content['field_uitleg']); ?>
        </p>
        <?php if(!empty($content['field_afbeelding'])) : ?>
             <?php print render($content['field_afbeelding']); ?>
        <?php endif; ?>
    </div>
</article>
