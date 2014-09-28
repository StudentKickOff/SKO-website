<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Student Kick-Off</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php print $base_path . path_to_theme(); ?>/assets/img/IM1.jpg" />
        </div>
        <div class="item">
          <img src="<?php print $base_path . path_to_theme(); ?>/assets/img/IM3.jpg" />
        </div>
        <div class="item active">
          <img src="<?php print $base_path . path_to_theme(); ?>/assets/img/IM2.jpg" />
        </div>
        <div class="item">
          <img src="<?php print $base_path . path_to_theme(); ?>/assets/img/IM4.jpg" />
        </div>
        <div class="item">
          <img src="<?php print $base_path . path_to_theme(); ?>/assets/img/IM5.jpg" />
        </div>
        <div class="item">
          <img src="<?php print $base_path . path_to_theme(); ?>/assets/img/IM6.jpg" />
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

    <div class="text">
      <div class="item"><img src="<?php print $base_path . path_to_theme(); ?>/assets/img/logo2.png" /></div>

      <span><p class="title">THIS WAS STUDENT KICK-OFF 2014</p></span>
      <span><p class="subtitle">
        <?php print l('go to website', 'home'); ?> |
        <?php print l('join the awesome crew', 'join', array('attributes' => array('style' => array('color:#f3b006')))); ?>
      </p></span>
    </div>

  </body>
</html>
