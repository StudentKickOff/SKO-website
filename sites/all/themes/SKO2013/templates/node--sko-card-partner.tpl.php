<article>
    <div class="grid-item-image">
        <div class="grid-item-image-overlay">
            <a href="<?php print $content['field_link'][0]['#markup']; ?>" target="_blank" class="button button-white">Bezoek website</a>
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
        <a href="<?php print $content['field_link'][0]['#markup']; ?>" target="_blank">
            <header>
                <?php print $title; ?>
            </header>
        </a>
        <div class="content">
          <?php print render($content['field_infotekst']); ?>
        </div>
        <?php
            if (!empty($content['field_filialen'])) :
        ?>
        <footer>
            <span class="author">
                <?php
                    if (!empty($content['field_filialen'])) {
                        print "Enkel op";
                    }
                ?>
            </span>
        </footer>
        <?php
            print render($content['field_filialen']);
            endif;
        ?>
    </div>
</article>
