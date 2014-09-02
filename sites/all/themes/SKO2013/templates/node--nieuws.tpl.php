<?php if ($teaser) : ?>
    <article>
        <div class="grid-item-image">
            <div class="grid-item-image-overlay">
                <a href="<?php print $node_url . '#scrollTo'; ?>" class="button button-white">Lees meer</a>
            </div>
            <?php
                if (!empty($content['field_kleine_foto'])) {
                    print render($content['field_kleine_foto']);
                } else {
                    if (!empty($content['field_grote_foto'])) {
                        print render($content['field_grote_foto']);
                    }
                }
             ?>
        </div>
        <div class="grid-item-content">
            <header>
                <datetime class="news-date"><?php print $date; ?></datetime>
                <h3>
                    <a href="<?php print $node_url . '#scrollTo'; ?>"><?php print $title; ?></a>
                </h3>
            </header>
            <?php print render($content['body']); ?>
        </div>
    </article>


<?php else : ?>

    <h1>Nieuws</h1>
    <article class="white-background detail-full-item news-full-item">
        <div class="detail-full-width-image">
            <?php print render($content['field_grote_foto']); ?>
        </div>
        <div class="detail-container">
            <?php if (!empty($content['field_fotos']) or !empty($content['field_attachment'])) : ?>
                <aside class="detail-side">
                  <?php if (!empty($content['field_fotos'])) : ?>
                    <h2 class="heading-primary">Foto&rsquo;s</h2>
                    <?php print render($content['field_fotos']); ?>
                  <?php endif; ?>
                  <?php if (!empty($content['field_attachment'])) : ?>
                    <div style="clear: both;" />
                    <br />
                    <h2 class="heading-primary">Bijlages</h2>
                    <?php
                      $attach_r = field_get_items('node', $node, 'field_attachment');
                      $attach = $attach_r[0];
                    ?>

                    <a href="<?php print file_create_url($attach['uri']); ?>">
                      <?php print $attach['filename']; ?>
                    </a>
                  <?php endif; ?>
                </aside>
            <?php endif; ?>
            <div class="detail-content">
                <header>
                    <datetime class="news-date"><?php print $date; ?></datetime>
                    <h1 class="news-heading"><?php print $title; ?></h1>
                </header>
                <?php print render($content['body']); ?>
                <?php include('includes/share-icons.inc'); ?>
            </div>
        </div>
    </article>

    <?php print render($content['flippy_pager']);?>

<?php endif; ?>
