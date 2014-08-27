<?php

function SKO2013_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == "webform_client_form_51") { // Ex: "webform_client_form_33"
        $form['#attributes']['class'][] = 'contact-form';
        $form['submitted']['container']['wie_wenst_u_te_bereiken']['#empty_option'] = "Onderwerp";
    } elseif ($form_id == "user_login") {
        $form['inleiding'] = array(
            '#type' => 'item',
            '#markup' => '<strong>Heb je nog geen Student Kick-Off account? ' . l('Maak dan een account aan', 'user/register') . ', of log in via Facebook of Google. ' . l('Wachtwoord vergeten?', 'user/password') . '</strong><br /><br />',
            '#weight' => -10,
        );
    } elseif ($form_id == "user_register_form") {
        $form['inleiding'] = array(
            '#type' => 'item',
            '#markup' => '<strong>Registratie is enkel mogelijk met een Student Kick-Off Card. Tijdens het registratieproces zal naar je kaartnummer gevraagd worden, dus houd deze bij de hand!<br /><br />Na het inloggen krijg je een bevestigingsemail toegestuurd met een link waarmee je je wachtwoord kan instellen. Heb je nog geen Student Kick-Off Card? Vraag ze bij een lid van de organisatie!</strong><br /><br />',
            '#weight' => -30,
        );
        $form['#submit'][] = 'custom_user_register_submit'; // Always submit back to login
    }
}

function custom_user_register_submit($form, &$form_state) {
    // Always submit back to login so we can show the correct messages instead of the homepage
    $form_state['redirect'] = 'user/login';
}

