<?php include('includes/header.inc'); ?>

<?php include('includes/subheader-small.inc'); ?>

<section>
    <?php include('includes/social-icons.inc'); ?>
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
                    <img src="<?php print $base_path . path_to_theme(); ?>/assets/images/studentvillage-header.jpg" />
                </div>
                <?php
                $nid = 82;
                print drupal_render(node_view(node_load($nid)));
                ?>
            </div>
            <div class="student-village-container column white-background column-no-padding">
                <h1>Village People 2014</h1>
                <?php print render($page['content']); ?>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.inc'); ?>
