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
                         <?php print l('Student village', 'student-village', array('attributes' => array('class' => array('current site-navigation-student-village')))); ?>
                    </li><li class="current horizontal-navigation-item site-navigation-item">
                         <?php print l('Praktisch', 'praktisch', array('attributes' => array('class' => array('current site-navigation-praktisch')))); ?>
                    </li><li class="horizontal-navigation-item site-navigation-item">
                         <?php print l('Historiek', 'historiek', array('attributes' => array('class' => array('current site-navigation-historiek')))); ?>
                    </li><li class="horizontal-navigation-item site-navigation-item" id="nav-toggle"><a href="#">&#9776;</a></li>                </ul>
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
                        Woensdag 26 september
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
            <a href="" class="button">Meer praktische info</a>
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
            <aside class="sidebar">
                <h2>Onze partners</h2>
                <?php print render($page['partners']); ?>
            </aside>
        </div>
    </section>

    <section>
        <div class="container">
            <?php print render($page['content']); ?>
        </div>
    </section>

    <footer class="site-footer" id="site-footer">
        <div class="container">
            <div class="map"></div>
            <div class="contact">
                <div class="contact-logo">
                    <img src="<?php print $base_path.path_to_theme(); ?>/assets/images/logo-shadow.png" class="footer-logo" />
                </div>
                <?php print render($page['footer']); ?>
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
                    <h3>Student Kick&#45;off</h3>
                    <p>
                        Adres regel 01<br />
                        Adres regel 02
                    </p>
                    <p>
                        +32 479 60 87 70
                    </p>
                </div>
            </div>
            <p class="copyright">
                &copy;2005&#45;2013 Student Kick&#45;off vzw
        </div>
    </footer>
