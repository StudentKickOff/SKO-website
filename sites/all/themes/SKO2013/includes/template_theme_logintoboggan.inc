<?php
function SKO2013_lt_unified_login_page($variables) {
  $login_form = $variables['login_form'];
  $register_form = $variables['register_form'];
  $active_form = $variables['active_form'];
  $output = '';

  $output .= '<div class="toboggan-unified ' . $active_form . '">';

  // Create the initial message and links that people can click on.
  $output .= '<div id="login-message">' . t('You are not logged in.') . '</div>';
  $output .= '<div id="login-links">';
  $output .= l(t('I have an account'), 'user/login', array('attributes' => array('class' => array('button', 'button-blue'), 'id' => 'login-link')));
  $output .= ' ';
  $output .= l(t('I want to create an account'), 'user/register', array('attributes' => array('class' => array('button', 'button-blue'), 'id' => 'register-link')));

  $output .= '</div>';

  // Add the login and registration forms in.
  $output .= '<div id="login-form">' . $login_form . '</div>';
  $output .= '<div id="register-form">' . $register_form . '</div>';

  $output .= '</div>';

  return $output;
}
