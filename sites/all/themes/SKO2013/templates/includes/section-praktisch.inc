<div class="container centered">
    <h1 class="hidden">Praktisch</h1>
    <ul class="feature-list">
        <li class="feature-list-item">
            <img class="feature-list-item-image" src="<?php print $base_path . path_to_theme(); ?>/assets/images/feature-wanneer.png" />
            <h1 class="button-blue">
                Woensdag 24 <br />
                september
            </h1>
        </li>
        <li class="feature-list-item">
            <img class="feature-list-item-image" src="<?php print $base_path . path_to_theme(); ?>/assets/images/feature-waar.png" />
            <h1 class="button-yellow">
                Sint&ndash;Pietersplein<br />
                Gent
            </h1>
        </li>
        <li class="feature-list-item">
            <img class="feature-list-item-image" src="<?php print $base_path . path_to_theme(); ?>/assets/images/feature-hoe-laat.png" />
            <h1 class="button-red">
                Vanaf 12 uur tot in de vroege uurtjes
            </h1>
        </li>
    </ul>
    <?php print l('Meer praktische info', 'info', array('attributes' => array('class' => array('button button-praktisch ')))); ?>
    <?php print l('Meewerken?', 'meewerken', array('attributes' => array('class' => array('button button-praktisch button-yellow'), 'id' => 'praktisch-meewerken-button'))); ?>
    <?php // print l('Student Village', 'meewerken/studentvillage', array('attributes' => array('class' => array('button button-praktisch button-red')))); ?>
</div>

