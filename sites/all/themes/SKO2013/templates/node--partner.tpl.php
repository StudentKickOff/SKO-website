<?php if($id % 3 == 2) : ?>
<li>
<?php endif; ?>
    <a href="<?php print $content['field_link'][0]['#markup']; ?>" alt="<?php print $title; ?>" target="_blank">
        <?php print render($content['field_logo']); ?>
    </a>
<?php if($id % 3 == 1) : ?>
</li>
<?php endif; ?>
