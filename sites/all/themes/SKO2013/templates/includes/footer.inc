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
                    <div id="meewerken-scrollto" class="contact-information">

                        <?php
                        /* <h2>Meewerken?</h2> */
                        /* <?php print l('Individueel', 'meewerken/inschrijven', array('attributes' => array('class' => array('button')))); ?> */
                        /* <?php print l('Groep', 'meewerken/groepen', array('attributes' => array('class' => array('button')))); ?> */

                        /* <p></p> */

                        /* <h3>Standhouder Student Village?</h3> */
                        /* <?php print l('Schrijf je nu in', 'meewerken/studentvillage', array('attributes' => array('class' => array('button button-red')))); ?> */
                        /* <p></p> */
                        ?>

                        <h3>Pers?</h3>
                        <?php print l('Schrijf je nu in', 'pers', array('attributes' => array('class' => array('button button-yellow')))); ?>

                        <p></p>

                        <h3>Student Kick&#45;Off vzw</h3>
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
            &copy;2005&#45;2014 Student Kick&#45;Off vzw<br /><br />
            Student Kick-Off vzw hecht belang aan uw privacy en verbindt zich ertoe om naar best vermogen de bescherming van de persoonsgegevens te waarborgen via technische veiligheidsvoorschriften en een adequaat veiligheidsbeleid naar haar medewerkers toe. Hoewel de meeste informatie op deze site beschikbaar is zonder dat er persoonlijke gegevens moeten worden verstrekt, is het mogelijk dat de gebruiker om persoonlijke informatie gevraagd wordt. Deze informatie zal enkel gebruikt worden in het kader van de recrutering van vrijwilligers voor het festival georganiseerd door Student Kick-Off vzw.<br />
            De gebruiker beschikt over een wettelijk recht op inzage en eventuele correctie van zijn persoonsgegevens. Indien nodig kunt u ook vragen de gegevens te corrigeren die onjuist, niet volledig of niet pertinent zouden zijn.
        </p>
    </div>
</footer>
