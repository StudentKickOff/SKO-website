<?php
// Responsiveness
function SKO2013_preprocess_html(&$vars) {
    $viewport = array(
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
        ),
    );
    drupal_add_html_head($viewport, 'viewport');
}

// Nonfront css for nonfront pages
function SKO2013_preprocess_page(&$variables, $hook) {

    if (arg(0) != 'home') {
        drupal_add_css(path_to_theme() . '/assets/css/nonfront.css.less', array('group' => CSS_THEME, 'weight' => 115, 'browsers' => array('IE' => 1, '!IE' => 1), 'preprocess' => FALSE));
    }
}

// Nice images
function SKO2013_preprocess_image(&$variables) {
  $attributes = &$variables['attributes'];

  foreach (array('width', 'height') as $key) {
    unset($attributes[$key]);
    unset($variables[$key]);
  }
}
