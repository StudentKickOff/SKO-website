<?php

function _webform_importmedewerkers_process_group($node, $submission) {

    $members = $submission->data;
    _webform_importmedewerkers_filter_fields($members);

    foreach($members as $member) {
        $query = _webform_importmedewerkers_build_query($member);
        _webform_importmedewerkers_send_api_request($query, $submission, $member);
    }
}

function _webform_importmedewerkers_normalize_fields(&$fields) {
    // Rijbewijs ja/nee -> 0/1
    $fields['rijbewijs'] = ($fields['rijbewijs'][0] == "ja") ? "1" : "0";
    $fields['voorkeur'] = "";
}

function _webform_importmedewerkers_filter_fields(&$members) {

    unset($members[30]); // Remove herhaal_e_mail
    unset($members[36]); // Remove akkoord
    unset($members[202]); // Remove voor/na/tijdens

    $forall = array(); // Merge the shift arrays
    $forall['shiften'] = array_filter(array_merge(
        $members[203],
        $members[204]
    ));

    _webform_importmedewerkers_process_shifts($forall['shiften']);

    unset($members[203]);
    unset($members[204]);

    $forall['opmerkingen'] = $members[33];
    unset($members[33]);

    $forall['vereniging'] = $members[24][0];
    unset($members[24]);

    $telefoon_verantwoordelijke = $members[28];
    unset($members[28]);

    $members = array_filter($members, "_webform_importmedewerkers_filter_empty");
    $members = array_chunk($members, 7);

    // Nicer names
    $new_keys = array("voornaam", "familienaam", "geboortedatum", "e_mail", "onderwijsinstelling", "maat_t_shirt", "rijbewijs");
    foreach($members as $key => $value) {
        foreach($value as $field_key => $field_value) {
            $value[$new_keys[$field_key]] = $field_value;
            unset($value[$field_key]);
        }

        $value = array_merge($value, $forall);

        if($key == 0) {
            $value["verantwoordelijkeVereniging"] = 1;
            $value["gsm_nummer"] = $telefoon_verantwoordelijke;
        } else {
            $value["verantwoordelijkeVereniging"] = 0;
            $value["gsm_nummer"] = array("");
        }

        _webform_importmedewerkers_normalize_fields($value);

        $members[$key] = $value;
    }
}

function _webform_importmedewerkers_filter_empty($var) {
    return(!(sizeof($var) == 1 && empty($var[0])));
}
