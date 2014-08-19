<?php
function SKO2013_date_combo($variables) {
  $patterns = array();
  $patterns[0] = '/<div[^>]*>/';
  $patterns[1] = '/<\/div>/';
  $patterns[2] = '/<label[^>]*>[^<]*<\/label>/';
  $replacements = array();
  $replacements[4] = '';
  $replacements[3] = '';
  $replacements[2] = '';
  $replacements[1] = '';

  $variables['element']['#children'] = preg_replace($patterns, $replacements, $variables['element']['#children'], preg_match_all($patterns[0], $variables['element']['#children']) - 1);
  return theme('form_element', $variables);
}
