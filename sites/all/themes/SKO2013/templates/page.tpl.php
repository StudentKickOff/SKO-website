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
        <?php
            /* <h4>Hou <?php print l('onze Facebookpagina', 'https://www.facebook.com/StudentKickOff'); ?> in de gaten en kom als eerste te weten welke artiesten onze podia zullen beklimmen!</h4> */
            /* <br /> */
        ?>
            <div class="two-columns">
                <div class="column white-background column-no-padding">
                    <h1>Main Stage<br /><br /></h1>
                    <?php print render($page['columnleft']); ?>
                </div>
                <div class="column column-no-padding white-background">
                    <h1>Red Bull Elektropedia presents Culture Club</h1>
                    <?php print render($page['columnright']); ?>
                </div>
            </div>
        <?php else : ?>
            <?php print render($page['content']); ?>
        <?php endif; ?>
    </div>
</section>

<?php include('includes/footer.inc'); ?>
