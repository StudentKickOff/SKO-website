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
            <footer>
                <span class="author">By <?php print $name; ?></span>
            </footer>
        </div>
    </article>


<?php else : ?>

    <h1>Nieuws</h1>
    <article class="white-background detail-full-item news-full-item">
        <div class="detail-full-width-image">
            <?php print render($content['field_grote_foto']); ?>
        </div>
        <div class="detail-container">
            <?php if (!empty($content['field_fotos'])) : ?>
                <aside class="detail-side">
                    <h2 class="heading-primary">Foto&rsquo;s</h2>
                    <?php print render($content['field_fotos']); ?>
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
