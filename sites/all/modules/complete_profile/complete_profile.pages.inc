<?php

function complete_profile_form($form, &$form_state, $account) {
  $form_state['user'] = $account;
  $form['#user'] = $account;
  // Category used by profile module.
  $form['#user_category'] = 'register';

  // Attach the regular user form.
  user_account_form($form, $form_state);

  // Attach the user field form elements.
  $langcode = function_exists('entity_language') ? entity_language('user', $form['#user']) : NULL;
  field_attach_form('user', $account, $form, $form_state, $langcode);

  $instances = field_info_instances('user', 'user');
  foreach (element_children($form) as $key) {
    if (!isset($instances[$key])) {
      $form[$key]['#access'] = FALSE;
    }
    else {
      if (!empty($instances[$key]['required'])) {
        // If the user has already filled out a value for this field, hide it.
        if (!complete_profile_field_is_empty('user', $account, $key)) {
          $form[$key]['#access'] = FALSE;
        }
      }
      elseif (empty($instances[$key]['user_register_form'])) {
        // Hide any fields not configured to show up on the registration form.
        $form[$key]['#access'] = FALSE;
      }
    }
  }

  // Support the deprecated profile module.
  if (module_exists('profile')) {
    profile_form_alter($form, $form_state, 'user_register_form');
    // Determine if each profile field should actually be shown or not.
    foreach (_profile_get_fields($form['#user_category'], TRUE) as $profile_field) {
      if (!complete_profile_profile_field_is_empty($account, $profile_field)) {
        $form[$profile_field->category][$profile_field->name]['#access'] = FALSE;
        $form[$profile_field->category]['#access'] = (bool) element_get_visible_children($form[$profile_field->category]);
      }
    }
  }


  // Support the regcode module
  if (module_exists('regcode')) {
    $code_optional = variable_get('regcode_optional', FALSE);

    $form['regcode']['regcode_code'] = array(
      '#type' => 'textfield',
      '#title' => variable_get('regcode_field_title', t('Registration Code')),
      '#description' => variable_get('regcode_field_description', t('Please enter your registration code.')),
      '#required' => !($code_optional || user_access('administer users')),
      '#element_validate' => array('regcode_code_element_validate'),
    );
  }

  $form['help'] = array(
    '#markup' => '<p>' . t('Fill out the following fields to complete your profile.') . '</p>',
    '#weight' => -100,
  );

  $form['actions'] = array('#type' => 'actions');
  $form['actions']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save'),
  );

  form_load_include($form_state, 'inc', 'user', 'user.pages');
  $form['#validate'][] = 'user_profile_form_validate';
  $form['#submit'][] = 'complete_profile_form_submit';

  return $form;
}

function complete_profile_form_submit($form, &$form_state) {
  // Regcode support
  if(module_exists('regcode')) {
    // Set regcode to used

    // Little hack to be able to use the regcode_use_helper here
    $regcode_array = array('regcode_code' => $form['regcode']['regcode_code']['#value']);
    regcode_use_helper($regcode_array, $form['#entity']);
  }

  // Submit the profile form
  return user_profile_form_submit($form, $form_state);
}

