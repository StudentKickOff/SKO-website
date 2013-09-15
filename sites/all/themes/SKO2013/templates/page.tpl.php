<?php include('includes/header.inc'); ?>

<?php include('includes/subheader-small.inc'); ?>


<section>
    <?php include('includes/social-icons.inc'); ?>
    <div class="container" id="scrollTo">
        <p class="breadcrumb">
            <?php print $breadcrumb ?>
        </p>
        <?php if ($messages): ?>
            <div id="messages"><div class="section clearfix">
                    <?php print $messages; ?>
                </div></div> <!-- /.section, /#messages -->
        <?php endif; ?>

        <?php if ($title === "Line-up") : ?>
            <div class="two-columns">
                <div class="column white-background column-no-padding">
                    <h1>Main Stage</h1>
                    <?php print render($page['columnleft']); ?>
                </div>
                <div class="column column-no-padding white-background">
                    <h1>2nd stage by Decadance & Charlatan</h1>
                    <?php print render($page['columnright']); ?>
                </div>
            </div>
        <?php else : ?>
            <?php print render($page['content']); ?>
        <?php endif; ?>
    </div>
</section>

<?php include('includes/footer.inc'); ?>
