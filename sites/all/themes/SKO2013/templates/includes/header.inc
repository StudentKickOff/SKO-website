<header class="site-header" id="site-header">
    <div class="container">
        <h1 class="site-header-logo">
            <?php print l('<img src="' . $base_path . path_to_theme() . '/assets/images/logo-shadow.png" alt="Student Kick Off" />', '<front>', array('html' => TRUE)); ?>
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