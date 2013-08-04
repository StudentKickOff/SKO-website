<section class="white-background">
    <?php include('social-icons.inc'); ?>
    <div class="container centered">
        <h1 class="hidden">Praktisch</h1>
        <ul class="feature-list">
            <li class="feature-list-item">
                <img class="feature-list-item-image" src="<?php print $base_path . path_to_theme(); ?>/assets/images/feature-waar.png" />
                <h2>Waar?</h2>
                <p>
                    Sint&ndash;Pietersplein<br />
                    9000 Gent
                </p>
            </li>
            <li class="feature-list-divider"></li>
            <li class="feature-list-item">
                <img class="feature-list-item-image" src="<?php print $base_path . path_to_theme(); ?>/assets/images/feature-wanneer.png" />
                <h2>Wanneer?</h2>
                <p>
                    Woensdag 25 september
                </p>
            </li>
            <li class="feature-list-divider"></li>
            <li class="feature-list-item">
                <img class="feature-list-item-image" src="<?php print $base_path . path_to_theme(); ?>/assets/images/feature-hoe-laat.png" />
                <h2>Hoe laat?</h2>
                <p>
                    Vanaf 12 uur tot in de vroege uurtjes
                </p>
            </li>
        </ul>
        <?php print l('Meer praktische info', 'info', array('attributes' => array('class' => array('button button-praktisch ')))); ?>
        <?php print l('Meewerken?', '', array('attributes' => array('class' => array('button button-praktisch button-yellow'), 'id' => 'praktisch-meewerken-button'))); ?>
    </div>
</section>
