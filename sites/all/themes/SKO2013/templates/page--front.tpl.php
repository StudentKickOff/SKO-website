<?php include('includes/header.inc'); ?>

<?php include('includes/subheader-large.inc'); ?>

<?php include('includes/section-praktisch.inc'); ?>

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

<?php include('includes/footer.inc'); ?>

