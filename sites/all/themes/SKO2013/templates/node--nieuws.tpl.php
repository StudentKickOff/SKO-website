<?php if ($teaser) : ?>
    <article>
        <div class="grid-item-image">
            <div class="grid-item-image-overlay">
                <a href="<?php print $node_url; ?>" class="button button-white">Lees meer</a>
            </div>
            <img src="<?php print image_style_url('none', $node->field_kleine_foto['und'][0]['uri']); ?>">
        </div>
        <div class="grid-item-content">
            <header>
                <datetime class="news-date"><?php print $date; ?></datetime>
                <h3><?php print $title; ?></h3>
            </header>
            <p>
                <?php print $node->body['und']['0']['summary']; ?>
            </p>
            <footer>
                <span class="author">By <?php print $name; ?></span>
                <span class="comments-counter">3<span class="hidden"><?php print $comment_count; ?></span></span>
            </footer>
        </div>
    </article>
<?php else : ?>
    print "supperdesup";

<?php endif; ?>
