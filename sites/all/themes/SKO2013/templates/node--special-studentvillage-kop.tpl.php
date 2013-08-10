<div class="studentvillage-kop clearfix">

    <h1><?php print $title; ?></h1>
    <?php print render($content['body']); ?>

    <?php if (!empty($content['field_fotos'])) : ?>
        <h2 class="heading-primary">Foto&rsquo;s</h2>
        <?php print render($content['field_fotos']); ?>
    <?php endif; ?>

</div>
