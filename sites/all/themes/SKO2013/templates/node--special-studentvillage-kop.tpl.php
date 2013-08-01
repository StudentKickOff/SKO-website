<div class="studentvillage-kop clearfix">

    <h1><?php print $title; ?></h1>
    <p>
        <?php print render($content['body']); ?>
    </p>

    <?php if (!empty($content['field_fotos'])) : ?>
        <h2 class="heading-primary">Foto&rsquo;s</h2>
        <?php print render($content['field_fotos']); ?>
    <?php endif; ?>

</div>
