<?php

function SKO2013_form_element_label($variables) {

    $element = $variables['element'];

    // This is also used in the installer, pre-database setup.
    $t = get_t();

    // If title and required marker are both empty, output no label.
    if (empty($element['#title']) && empty($element['#required'])) {
        return '';
    }

    // If the element is required, a required marker is appended to the label.
    $required = !empty($element['#required']) ? theme('form_required_marker', array('element' => $element)) : '';

    $title = filter_xss_admin($element['#title']);

    $attributes = array();
    $attributes['class'] = '';
    // Style the label as class option to display inline with the element.
    if ($element['#title_display'] == 'after') {
        $attributes['class'] = 'option';
    }
    // Show label only to screen readers to avoid disruption in visual flows.
    elseif ($element['#title_display'] == 'invisible') {
        $attributes['class'] = 'element-invisible';
    }

    if (!empty($element['#id'])) {
        $attributes['for'] = $element['#id'];
    }


    if (isset($element['#webform_component']) && $element['#webform_component']['nid'] == 51) {
        if ($element['#webform_component']['form_key'] == "naam") {
            $attributes['class'] .= ' label-icon label-icon-name';
        } else if ($element['#webform_component']['form_key'] == "e_mail") {
            $attributes['class'] .= ' label-icon label-icon-email';
        } else if ($element['#webform_component']['form_key'] == "gsm_nummer") {
            $attributes['class'] .= ' label-icon label-icon-number';
        } else if ($element['#webform_component']['form_key'] == "wie_wenst_u_te_bereiken") {
            $attributes['class'] .= ' label-icon label-icon-wie';
        } else if ($element['#webform_component']['form_key'] == "bericht") {
            $attributes['class'] .= ' label-icon label-icon-message';
        }
    }

    // The leading whitespace helps visually separate fields from inline labels.
    return ' <label' . drupal_attributes($attributes) . '>' . $t('!title !required', array('!title' => $title, '!required' => $required)) . "</label>\n";
}
