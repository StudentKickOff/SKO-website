<?php if ($teaser) : ?>
    <a href="<?php print $node_url; ?>">
        <span class="line-up-item-timespan">
            <?php
                $splitted = preg_split('/ /', trim(strip_tags(render($content['field_tijd']))));
                if(count($splitted) >= 3) {
                    print $splitted[0] . "-" . $splitted[2];
                }
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
                            $splitted = preg_split('/ /', trim(strip_tags(render($content['field_tijd']))));
                            if(count($splitted) >= 3) {
                              print 'Van ' . $splitted[0] . " tot " . $splitted[2];
                            }
                        ?>
                    </h2>
                </header>
                <?php print render($content['field_infotekst']); ?>
                <?php include('includes/share-icons.inc'); ?>
            </div>
        </div>
    </article>

<?php endif; ?>
