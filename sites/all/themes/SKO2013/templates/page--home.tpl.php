<?php include('includes/header.inc'); ?>

<?php include('includes/subheader-large.inc'); ?>

<section class="pattern-background">
    <div class="container has-sidebar">
        <div class="main">
            <h1 class="white">What&rsquo;s hot!?</h1>
            <div class="slider-container">
                <div id="slider">
                    <?php print render($page['hot']); ?>
                </div>
                <a href="#" class="slider-previous-arrow">Previous</a>
                <a href="#" class="slider-next-arrow">Next</a>
            </div>
            <br />
            <br />
            <iframe scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?autoplay=false&playlist=false&width=657&height=80&cover=true&type=playlist&id=986602821&title=&app_id=undefined" width="657" height="80"></iframe>
        </div>
        <aside class="sidebar-closer">
            <h2><a href="content/partners">Onze partners</a></h2>
            <!--<h4>Uw logo hier? Contacteer ons via <a href="mailto:middelenwerving@studentkickoff.be">middelenwerving@studentkickoff.be</a>!</h4>-->
            <div id="partner-slider">
                <?php print render($page['partners']); ?>
            </div>
        </aside>
    </div>
</section>

<section id="scrollTo">
    <div class="container">
        <?php print render($page['content']); ?>
    </div>
</section>

<?php include('includes/footer.inc'); ?>

