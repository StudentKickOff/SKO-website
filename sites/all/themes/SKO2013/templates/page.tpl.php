    <header class="site-header" id="site-header">
        <div class="container">
            <h1 class="site-header-logo">
                <a href="#"><img src="<?php print $base_path.path_to_theme(); ?>/assets/images/logo-shadow.png" alt="Student Kick Off" /></a>
            </h1>
            <nav>
                <ul class="horizontal-navigation site-navigation">
                    <!-- </li> and starting <li> have to be on the same line
                         because display:inline-block will add whitespace otherwise -->
                    <li class="current horizontal-navigation-item site-navigation-item">
                        <a href="index.html" title="" class="current site-navigation-home">Home</a>
                    </li><li class="horizontal-navigation-item site-navigation-item">
                        <a href="line-up.html" title="" class="site-navigation-line-up">Line-up</a>
                    </li><li class="horizontal-navigation-item site-navigation-item">
                        <a href="student-village.html" title="" class="site-navigation-student-village">Student Village</a>
                    </li><li class="current horizontal-navigation-item site-navigation-item">
                        <a href="index.html" title="" class="current site-navigation-praktisch">Praktisch</a>
                    </li><li class="horizontal-navigation-item site-navigation-item">
                        <a href="historiek.html" title="" class="site-navigation-historiek">Historiek</a>
                    </li>
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

    <?php render($content); ?>

    <footer class="site-footer" id="site-footer">
        <div class="container">
            <div class="map"></div>
            <div class="contact">
                <div class="contact-logo">
                    <img src="<?php print $base_path.path_to_theme(); ?>/assets/images/logo-shadow.png" class="footer-logo" />
                </div>
                <form class="contact-form">
                    <h1>Contact</h1>
                    <div class="input-group">
                        <label for="input-name" class="label-icon label-icon-name">
                            Je naam
                        </label>
                        <input type="text" class="input-prefixed" name="name" id="input-name" placeholder="Je naam" />
                    </div>
                    <div class="input-group">
                        <label for="input-email" class="label-icon label-icon-email">
                            Je e&#45;mailadres
                        </label>
                        <input type="email" class="input-prefixed" name="email" id="input-email" placeholder="Je e&#45;mailadres" />
                    </div>
                    <div class="input-group">
                        <label for="input-message" class="label-icon label-icon-message">
                            Je bericht
                        </label>
                        <textarea name="message" id="input-message" class="input-prefixed" placeholder="Je bericht"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Verzenden" class="button" />
                    </div>
                </form>
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
