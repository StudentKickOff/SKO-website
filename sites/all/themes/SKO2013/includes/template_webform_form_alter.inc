<?php

function SKO2013_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == "webform_client_form_51") { // Ex: "webform_client_form_33"
        $form['#attributes']['class'][] = 'contact-form';
        $form['submitted']['container']['wie_wenst_u_te_bereiken']['#empty_option'] = "Onderwerp";
    } elseif ($form_id == "user_login") {
        $form['inleiding'] = array(
            '#type' => 'item',
            '#markup' => '<strong>Heb je nog geen Student Kick-Off account? <a href="user/register">Maak dan een account aan</a>, of log in via Facebook of Google.</strong><br /><br />',
            '#weight' => -10,
        );
    } elseif ($form_id == "user_register_form") {
        $form['inleiding'] = array(
            '#type' => 'item',
            '#markup' => '<strong>Registratie is enkel mogelijk met een Student Kick-Off Card. Tijdens het registratieproces zal naar je kaartnummer gevraagd worden, dus houd deze bij de hand!</strong><br /><br />',
            '#weight' => -30,
        );
    }
}
