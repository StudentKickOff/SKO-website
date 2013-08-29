<?php

function _webform_importmedewerkers_log($message, $severity) {
    watchdog("Webform Import Medewerkers", $message, array(), $severity);
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
