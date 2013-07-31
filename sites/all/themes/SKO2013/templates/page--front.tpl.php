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
                         <?php print l('Info', 'info', array('attributes' => array('class' => array('current site-navigation-praktisch')))); ?>
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
                starting in
            </div>
            <span class="two-numbers">
                <span id="countdown-days">
                    <span class="number">2</span>
                    <span class="number">7</span>
                </span>
                <span class="number-sub">dagen</span>
            </span>
            <span class="two-numbers">
                <span id="countdown-hours">
                    <span class="number">2</span>
                    <span class="number">7</span>
                </span>
                <span class="number-sub">uren</span>
            </span>
            <span class="two-numbers">
                <span id="countdown-minutes">
                    <span class="number">2</span>
                    <span class="number">7</span>
                </span>
                <span class="number-sub">minuten</span>
            </span>
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

    <section class="white-background">
        <div class="container centered">
            <h1 class="hidden">Praktisch</h1>
            <ul class="feature-list">
                <li class="feature-list-item">
                    <img class="feature-list-item-image" src="<?php print $base_path.path_to_theme(); ?>/assets/images/feature-waar.png" />
                    <h2>Waar?</h2>
                    <p>
                        Sint&ndash;Pietersplein<br />
                        9000 Gent
                    </p>
                </li>
                <li class="feature-list-item">
                    <img class="feature-list-item-image" src="<?php print $base_path.path_to_theme(); ?>/assets/images/feature-wanneer.png" />
                    <h2>Wanneer?</h2>
                    <p>
                        Woensdag 25 september
                    </p>
                </li>
                <li class="feature-list-item">
                    <img class="feature-list-item-image" src="<?php print $base_path.path_to_theme(); ?>/assets/images/feature-hoe-laat.png" />
                    <h2>Hoe laat?</h2>
                    <p>
                        Vanaf 12 uur tot in de vroege uurtjes
                    </p>
                </li>
            </ul>
            <?php print l('Meer praktische info', 'praktisch', array('attributes' => array('class' => array('button')))); ?>
        </div>
    </section>

    <section class="pattern-background">
        <div class="container has-sidebar">
            <div class="main">
                <h1>What&rsquo;s hot!?</h1>
                <div class="slider-container">
                    <div id="slider">
                        <?php print render($page['hot']); ?>
                    </div>
                    <a href="#" class="slider-previous-arrow">Previous</a>
                    <a href="#" class="slider-next-arrow">Next</a>
                </div>
            </div>
            <aside class="sidebar-closer">
                <h2>Onze partners</h2>
                <div id="partner-slider">
                    <?php print render($page['partners']); ?>
                </div>
            </aside>
        </div>
    </section>

    <section>
        <div class="container">
            <?php print render($page['content']); ?>
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
