<article class="student-village white-background detail-full-item history-item <?php print (($id == 1) ? 'history-item-expanded' : ''); ?>">
    <a href="#" class="history-item-toggle">
        <?php print $title; ?>
    </a>
    <div class="detail-container">

        <header>
            <h1 class="no-margin no-padding">
                <?php print $title; ?>
            </h1>
        </header>

        <?php print render($content['field_logo']); ?>
        <p>
            <?php print render($content['field_infotekst']); ?>
        </p>
    </div>
</article>