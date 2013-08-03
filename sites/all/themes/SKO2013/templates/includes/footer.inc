<footer class="site-footer" id="site-footer">
    <?php include('social-icons.inc'); ?>
    <div class="container">
        <div class="contact">
            <div class="contact-logo">
                <img src="<?php print $base_path . path_to_theme(); ?>/assets/images/logo-shadow.png" class="footer-logo" />
            </div>

            <div class="two-columns">
                <div class="column">
                    <?php print render($page['footer']); ?>
                </div>

                <div class="column">
                    <div class="contact-information">

                        <h2>Meewerken?</h2>
                        <?php print l('Individueel', 'meewerken/inschrijven', array('attributes' => array('class' => array('button')))); ?>
                        <?php print l('Groep', 'meewerken/groepen', array('attributes' => array('class' => array('button')))); ?>

                        <p></p>

                        <h3>Standhouder Student Village?</h3>
                        <?php print l('Schrijf je nu in', 'meewerken/studentvillage', array('attributes' => array('class' => array('button button-red')))); ?>

                        <p></p>

                        <h3>Pers?</h3>
                        <?php print l('Schrijf je nu in', 'pers', array('attributes' => array('class' => array('button button-yellow')))); ?>

                        <p></p>

                        <h3>Student Kick&#45;off vzw</h3>
                        <p>
                            <b>Maatschappelijke zetel</b><br />
                            Botermarkt 1<br />
                            9000 Gent<br />
                            BTW BE 0886.847.343
                        </p>
                        <p>
                            <b>Postadres</b><br />
                            Blekerijstraat 75 bus 3<br />
                            9000 Gent
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <p class="copyright">
            &copy;2005&#45;2013 Student Kick&#45;off vzw
    </div>
</footer>
