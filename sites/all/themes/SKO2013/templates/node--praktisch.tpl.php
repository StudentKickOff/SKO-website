<?php if ($teaser) : ?>
    <article>
        <div class="grid-item-image">
            <div class="grid-item-image-overlay">
                <a href="<?php print $node_url ?>" class="button button-white">Lees meer</a>
            </div>
            <?php if(!empty($content['field_afbeelding'])) : ?>
                 <?php print render($content['field_afbeelding']); ?>
            <?php endif; ?>
        </div>
        <div class="grid-item-content">
            <a href="<?php print $node_url ?>">
                <header>
                    <?php print $title ?>
                </header>
            </a>
        </div>
    </article>
<?php else : ?>
    <h1><?php print $title; ?></h1>
    <article class="white-background">
        <div class="detail-container">
            <?php print render($content['field_uitleg']); ?>
        </div>
    </article>
<?php endif; ?>
