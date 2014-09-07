<?php

function _webform_importmedewerkers_process_solo($node, $submission) {
    $fields = array();

    foreach($submission->data as $key => $value) {
        $fields[$node->webform['components'][$key]['form_key']] = $value;
    }

    _webform_importmedewerkers_filter_fields($fields);
    _webform_importmedewerkers_process_shifts($fields['shiften']);
    _webform_importmedewerkers_normalize_fields($fields);
    $query = _webform_importmedewerkers_build_query($fields);

    // We pass the submission and fields here too for logging
    /* _webform_importmedewerkers_send_api_request($query, $submission, $fields); */
}

function _webform_importmedewerkers_normalize_fields(&$fields) {
    // Rijbewijs ja/nee -> 0/1
    $fields['rijbewijs'] = ($fields['rijbewijs'][0] == "ja") ? "1" : "0";

    // Add tapervaring to opmerkingen
    $fields['opmerkingen'][0] .= "\n\n" . $fields['barervaring'][0];
    unset($fields['barervaring']);

    // Add empty fields
    $fields['vereniging'] = "";
    $fields['verantwoordelijkeVereniging'] = "0";

    $fields['voorkeur'] = (isset($fields['voorkeur'])) ? $fields['voorkeur'][0] : "";
}


function _webform_importmedewerkers_filter_fields(&$fields) {

    // Remove unused fields
    unset($fields['rijksregisternummer']);
    unset($fields['id_kaart_nummer']);
    unset($fields['herhaal_e_mail']);
    unset($fields['wanneer_wil_je_meehelpen']);
    unset($fields['ik_ga_akkoord_met_het_reglement']);

    // Merge the shift arrays
    $fields['shiften'] = array_filter(array_merge(
        $fields['beschikbaarheid_voor_en_na_student_kick_off'],
        $fields['beschikbaarheid_tijdens_student_kick_off']
    ));

    unset($fields['beschikbaarheid_voor_en_na_student_kick_off']);
    unset($fields['beschikbaarheid_tijdens_student_kick_off']);
}
