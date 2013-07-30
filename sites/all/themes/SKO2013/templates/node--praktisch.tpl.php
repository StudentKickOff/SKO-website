<article class="white-background detail-full-item history-item">
    <a href="#" class="history-item-toggle"><?php print $title; ?></a>
    <div class="detail-container">
        <header>
            <h1 class="no-margin no-padding"><?php print $title; ?></h1>
        </header>
        <p>
            <?php print render($content['field_uitleg']); ?>
        </p>
        <?php print render($content['field_afbeelding']); ?>
    </div>
</article>