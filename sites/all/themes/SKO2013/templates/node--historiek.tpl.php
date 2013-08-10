<article class="white-background detail-full-item history-item">
    <a href="#" class="history-item-toggle"><?php print $title; ?></a>
    <div class="detail-container">
        <aside class="detail-side">
            <?php print render($content['field_poster']); ?>
        </aside>
        <div class="detail-content">
            <header>
                <h1 class="no-margin no-padding">Student Kick-off <?php print $title; ?></h1>
            </header>
            <?php print render($content['body']); ?>
            <h2>Line-up</h2>
            <?php print render($content['field_line_up']); ?>
        </div>
    </div>

    <?php if (!empty($content['field_fotos'])) : ?>
      <div class="detail-container">
         <h2>Foto's</h2>
         <?php print render($content['field_fotos']); ?>
      </div>
    <?php endif; ?>
</article>
