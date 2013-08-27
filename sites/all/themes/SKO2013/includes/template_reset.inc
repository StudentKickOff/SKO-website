<?php
// Removes the basic Drupal CSS
function SKO2013_css_alter(&$css) {
    // Remove defaults.css file.
    unset($css[drupal_get_path('module', 'system') . '/defaults.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.css']);
//    unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
    unset($css[drupal_get_path('module', 'user') . '/user.css']);
}
