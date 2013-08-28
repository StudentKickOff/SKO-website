<?php

function SKO2013_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == "webform_client_form_51") { // Ex: "webform_client_form_33"
        $form['#attributes']['class'][] = 'contact-form';
        $form['submitted']['container']['wie_wenst_u_te_bereiken']['#empty_option'] = "Onderwerp";
    }
}
