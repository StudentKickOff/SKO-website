<?php

function _webform_importmedewerkers_process_group($node, $submission) {

    dpm($submission);

    $members = $submission->data;
    _webform_importmedewerkers_filter_fields($members);

    dpm($members);

}

function _webform_importmedewerkers_send_api_request($query, $submission, $fields) {
    $context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
    $xml = file_get_contents($query, false, $context);
    $xml = simplexml_load_string($xml);

    if(!$xml) {
        _webform_importmedewerkers_log("Geen XML resultaat" . "<br />"
            . "<pre>" . print_r($submission, true) . "</pre><br />"
            . "<pre>" . print_r($fields, true) . "</pre>",
                WATCHDOG_ERROR);
    } else {
        $result_attributes = $xml->attributes();
        if($result_attributes['Success'] == "False") {
            _webform_importmedewerkers_log($result_attributes['Error'] . "<br />"
                . "<pre>" . print_r($submission, true) . "</pre><br />"
                . "<pre>" . print_r($fields, true) . "</pre>",
                    WATCHDOG_ERROR);
        }
    }
}

function _webform_importmedewerkers_build_query(&$fields) {
    return "http://planning.studentkickoff.be/api/AddMedewerker?token=skoweb"
        . "&voornaam=" .              implode($fields['voornaam'])
        . "&naam=" .                  implode($fields['familienaam'])
        . "&geboortedatum=" .         implode($fields['geboortedatum'])
        . "&gsm=" .                   implode($fields['gsm_nummer'])
        . "&email=" .                 implode($fields['e_mail'])
        . "&onderwijsinstelling=" .   implode($fields['onderwijsinstelling'])
        . "&tshirtMaat=" .            implode($fields['maat_t_shirt'])
        . "&rijbewijs=" .                     $fields['rijbewijs']
        . "&voorkeur=" .                      $fields['voorkeur']
        . "&opmerkingen=" . urlencode(implode($fields['opmerkingen']))
        . "&vereniging=" .                    $fields['vereniging']
        . "&verantwoordelijkeVereniging=" .   $fields['verantwoordelijkeVereniging']
        . "&shiften=" .          implode(',', $fields['shiften']);
}

function _webform_importmedewerkers_normalize_fields(&$fields) {
    // Rijbewijs ja/nee -> 0/1
    $fields['rijbewijs'] = ($fields['rijbewijs'][0] == "ja") ? "1" : "0";
    $fields['voorkeur'] = "";
}

function _webform_importmedewerkers_process_shifts(&$shifts) {
    foreach($shifts as $i => $shift) {
        $splitted = preg_split('/[ :u\-]/', $shift);

        if(strpos($shift, ' ') === false) {
            // Showday. Input: xxuyy-zzuaa
            $shifts[$i] = "2013-09-25_" . $splitted[0] . ":" . $splitted[1];
        } else {
            // Non showday. Input: dd-MM-yyyy hh:mm
            $shifts[$i] = $splitted[2] . "-" . $splitted[1] . "-" . $splitted[0] . "_" . $splitted[3] . ":" . $splitted[4];
        }
    }
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

    $forall['vereniging'] = $members[24];
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
