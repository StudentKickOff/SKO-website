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
            Student Kick-Off vzw, de beheerder van de desbetreffende website, hecht belang aan uw privacy en verbindt zich ertoe om naar best vermogen de bescherming van de persoonsgegevens te waarborgen via technische veiligheidsvoorschriften en een adequaat veiligheidsbeleid naar haar medewerkers toe. Hoewel de meeste informatie op deze site beschikbaar is zonder dat er persoonlijke gegevens moeten worden verstrekt, is het mogelijk dat de gebruiker om persoonlijke informatie gevraagd wordt. De informatie opgevraagd in de formulieren zal enkel gebruikt worden in het kader van de recrutering van vrijwilligers voor het festival georganiseerd door Student Kick-Off vzw. Indien de gebruiker hiermee toestemt zal de verkregen informatie meegedeeld kunnen worden aan de partners van Student Kick-Off vzw voor marketingdoeleinden.<br />
            De gebruiker beschikt over een wettelijk recht op inzage en eventuele correctie van zijn persoonsgegevens. Dit recht kan uitgeoefend worden door het 'contactformulier' in te vullen met als onderwerp 'Web' onderaan de volgende pagina: <a href="http://www.studentkickoff.be/#webform-client-form-51">http://www.studentkickoff.be</a>.
        </p>
    </div>
</footer>
