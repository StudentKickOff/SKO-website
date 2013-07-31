    <header class="site-header" id="site-header">
        <div class="container">
            <h1 class="site-header-logo">
                <a href="#"><img src="<?php print $base_path.path_to_theme(); ?>/assets/images/logo-shadow.png" alt="Student Kick Off" /></a>
            </h1>
            <nav>
                <ul class="horizontal-navigation site-navigation">
                     <!--</li> and starting <li> have to be on the same line
                         because display:inline-block will add whitespace otherwise-->
                    <li class="current horizontal-navigation-item site-navigation-item">
                         <?php print l('Home', 'frontpage', array('attributes' => array('class' => array('current site-navigation-home')))); ?>
                    </li><li class="horizontal-navigation-item site-navigation-item">
                         <?php print l('Line-up', 'line-up', array('attributes' => array('class' => array('current site-navigation-line-up')))); ?>
                    </li><li class="horizontal-navigation-item site-navigation-item">
                         <?php print l('Student village', 'studentvillage', array('attributes' => array('class' => array('current site-navigation-student-village')))); ?>
                    </li><li class="current horizontal-navigation-item site-navigation-item">
                         <?php print l('Praktisch', 'praktisch', array('attributes' => array('class' => array('current site-navigation-praktisch')))); ?>
                    </li><li class="horizontal-navigation-item site-navigation-item">
                         <?php print l('Historiek', 'historiek', array('attributes' => array('class' => array('current site-navigation-historiek')))); ?>
                    </li><li class="horizontal-navigation-item site-navigation-item" id="nav-toggle"><a href="#">&#9776;</a></li>                
                </ul>
            </nav>
        </div>
    </header>

    <section class="picture-background">
        <div class="container centered" id="countdown">
            <h1 class="hidden">Countdown</h1>
            <div class="countdown-title">
                Student Kick&#45;off 2013<br />
            </div>
            <ul class="social-icons">
                <li class="social-icon social-icon-facebook">
                    <a href="#" title="">Facebook</a>
                </li>
                <li class="social-icon social-icon-twitter">
                    <a href="#" title="">Twitter</a>
                </li>
                <li class="social-icon social-icon-instagram">
                    <a href="#" title="">Instagram</a>
                </li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container"  id="scrollTo">
            <p class="breadcrumb">
                <?php print $breadcrumb ?>
            </p>
            <?php if ($messages): ?>
                <div id="messages">
                    <div class="section clearfix">
                        <?php print $messages; ?>
                    </div>
                </div> <!-- /.section, /#messages -->
            <?php endif; ?>
                    
            <div class="two-columns">
                <div class="column white-background column-no-padding">
                    <div class="detail-full-width-image">
                        <img src="<?php print $base_path.path_to_theme(); ?>/assets/images/bart-kaell.jpg" />
                    </div>
                    <h1>Student Village</h1>
                    <p>
                        Gent staat bekend als dé studentenstad van Vlaanderen. Wie hier ooit studeerde, kan dit alleen maar beamen. Voor nieuwe studenten is het soms moeilijk hun weg te vinden tussen het gigantisch aanbod van verenigingen, voordelen en mogelijkheden die de Arteveldestad hen te bieden heeft. Om hen een beetje op weg te helpen biedt Student Kick-Off een heuse Student Village aan. Tussen 12h en 18h kan elke student hier terecht om een kijkje te nemen bij de verschillende standjes van allerlei verenigingen, partners en onderwijsinstellingen. Niet alleen droge informatie; scoor hier ook je lading goodies en gadgets of waag je aan één van de vele attracties! In de Student Village vind je alles wat je zoekt: van toneel tot muziek tot politiek! "En waar is dat allemaal te doen?", horen we je vragen: 25 september op 't Sint-Pietersplein met een concert op de achtergrond en een drankje in de hand! Cheers!                    </p>
                    </p>
                </div>
                <div class="student-village-container column white-background column-no-padding">
                    <h1>Programmatie</h1>
                    <?php print render($page['content']); ?>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer" id="site-footer">
        <div class=" container">
            <div class="contact">
                <div class="contact-logo">
                    <img src="<?php print $base_path.path_to_theme(); ?>/assets/images/logo-shadow.png" class="footer-logo" />
                </div>
                
                <div class="two-columns">
                    <div class="column">
                        <?php print render($page['footer']); ?>
                    </div>
                    
                    <div class="column">
                        <div class="contact-information">
                            <ul class="social-icons">
                                <li class="social-icon social-icon-facebook">
                                    <a href="#" title="">Facebook</a>
                                </li>
                                <li class="social-icon social-icon-twitter">
                                    <a href="#" title="">Twitter</a>
                                </li>
                                <li class="social-icon social-icon-instagram">
                                    <a href="#" title="">Instagram</a>
                                </li>
                            </ul>


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
