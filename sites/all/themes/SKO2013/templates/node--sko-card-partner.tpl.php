<article>
    <div class="grid-item-image">
        <div class="grid-item-image-overlay">
            <a href="<?php print $content['field_link'][0]['#markup']; ?>" target="_blank" class="button button-white">Meer info</a>
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
            <h3>
                <?php print $title; ?>
            </h3>
        </header>
            <?php print render($content['field_infotekst']); ?>
        <footer>
            <span class="author">
                <?php
                    if (!empty($content['field_filialen'])) {
                        print "Enkel in: " . render($content['field_filialen']);
                    }
                ?>
            </span>
        </footer>
    </div>
</article>
