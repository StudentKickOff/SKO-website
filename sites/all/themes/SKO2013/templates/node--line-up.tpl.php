<?php if ($teaser) : ?>
    <a href="<?php print $node_url; ?>">
        <span class="line-up-item-timespan">
            <?php
                $splitted = preg_split('/ /', $content['field_tijd'][0]['#markup']);
                $start = str_replace(':', 'U', substr($splitted[1], 0, 3));
                $eind = str_replace(':', 'U', substr($splitted[4], 0, 3));
                print $start . "-" . $eind;
            ?>
        </span>
        <span class="line-up-item-artist"><?php print $title; ?></span>
    </a>

<?php else : ?>

    <article class="white-background detail-full-item">
        <div class="detail-full-width-image">
            <?php print render($content['field_grote_fote']); ?>
        </div>
        <div class="detail-container">
            <aside class="detail-side">
                <?php if(!empty($content['field_fotos'])) : ?>
                    <h2 class="heading-primary">Foto&rsquo;s</h2>
                    <?php print render($content['field_fotos']); ?>
                    <div style="clear: both;"></div>
                <?php endif; ?>
                <?php if(!empty($content['field_videos'])) : ?>
                    <h2 class="heading-ternary">Video&rsquo;s</h2>
                <?php endif; ?>
                <?php if(!empty($content['field_website'])) : ?>
                    <h2 class="heading-secondary">Website</h2>
                    <a href="<?php print render($content['field_website'][0]['#markup']); ?>" target="_blank">
                        Website van <?php print $title; ?>
                    </a>
                <?php endif; ?>
            </aside>
            <div class="detail-content">
                <header>
                    <h1 class="no-margin no-padding"><?php print $title; ?></h1>
                    <h2 class="line-up-detail-timespan">
                        <?php
                        $splitted = preg_split('/ /', $content['field_tijd'][0]['#markup']);
                        $start = str_replace(':', 'u', substr($splitted[1], 0, 5));
                        $eind = str_replace(':', 'u', substr($splitted[4], 0, 5));
                        print "van " . $start . " tot " . $eind;
                        ?>
                    </h2>
                </header>
                <?php print render($content['field_infotekst']); ?>
            </div>
        </div>
    </article>

<?php endif; ?>
