<?php

function _webform_importmedewerkers_log($message, $severity) {
    watchdog("Webform Import Medewerkers", $message, array(), $severity);
}

function _webform_importmedewerkers_process_shifts(&$shifts) {
    foreach($shifts as $i => $shift) {
        $splitted = preg_split('/[ :u\-]/', $shift);

        if(strpos($shift, ' ') === false) {
            // Showday. Input: xxuyy-zzuaa
            $shifts[$i] = "2014-09-24_" . $splitted[0] . ":" . $splitted[1];
        } else {
            // Non showday. Input: dd-MM-yyyy hh:mm
            $shifts[$i] = $splitted[2] . "-" . $splitted[1] . "-" . $splitted[0] . "_" . $splitted[3] . ":" . $splitted[4];
        }
    }
}

function _webform_importmedewerkers_send_api_request($query, $submission, $fields) {
    $context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
    $xml_string = file_get_contents($query, false, $context);
    $xml = simplexml_load_string($xml_string);

    if(!$xml) {
        _webform_importmedewerkers_log("Geen XML resultaat" . "<br />"
            . "<pre>" . $query . "</pre><br />"
            . "<pre>" . htmlspecialchars($xml_string) . "</pre><br />"
            . "<pre>" . print_r($submission, true) . "</pre><br />"
            . "<pre>" . print_r($fields, true) . "</pre>",
                WATCHDOG_ERROR);
    } else {
        $result_attributes = $xml->attributes();
        if($result_attributes['Success'] == "False") {
            _webform_importmedewerkers_log($result_attributes['Error'] . "<br />"
                . "<pre>" . $query . "</pre><br />"
                . "<pre>" . htmlspecialchars($xml_string) . "</pre><br />"
                . "<pre>" . print_r($submission, true) . "</pre><br />"
                . "<pre>" . print_r($fields, true) . "</pre>",
                    WATCHDOG_ERROR);
        } else if ($result_attributes['Success'] == "True") {
            _webform_importmedewerkers_log(
                "Invoegen geslaagd voor " . $fields['voornaam'][0] . " " . $fields['familienaam'][0] . "<br />"
                . "<pre>" . $query . "</pre><br />"
                . "<pre>" . htmlspecialchars($xml_string) . "</pre><br />"
                . "<pre>" . print_r($fields, true) . "</pre>",
                    WATCHDOG_INFO);
        }
    }
}

function _webform_importmedewerkers_build_query(&$fields) {
    return "http://planning.studentkickoff.be/api/AddMedewerker?token=skoweb"
        . "&voornaam=" .                      toAscii(implode($fields['voornaam']))
        . "&naam=" .                          toAscii(implode($fields['familienaam']))
        . "&geboortedatum=" .                 toAscii(implode($fields['geboortedatum']))
        . "&gsm=" . toAscii(preg_replace('/[^0-9]/', '', implode($fields['gsm_nummer'])))
        . "&email=" .                         toAscii(implode($fields['e_mail']))
        . "&straat=" .                        toAscii(implode($fields['adres']))
        . "&postcode=" .                      toAscii(implode($fields['postcode']))
        . "&gemeente=" .                      toAscii(implode($fields['gemeente']))
        . "&rijksregisternummer=" .           toAscii(implode($fields['rijksregisternummer']))
        . "&rekeningnummer=" .                toAscii(implode($fields['id_kaart_nummer']))
        . "&onderwijsinstelling=" .           toAscii(implode($fields['onderwijsinstelling']))
        . "&tshirtMaat=" .                    toAscii(implode($fields['maat_t_shirt']))
        . "&rijbewijs=" .                     toAscii($fields['rijbewijs'])
        . "&voorkeur=" .                      toAscii($fields['voorkeur'])
        . "&opmerkingen=" .                   toAscii(implode($fields['opmerkingen']))
        . "&vereniging=" .                    toAscii($fields['vereniging'])
        . "&verantwoordelijkeVereniging=" .   toAscii($fields['verantwoordelijkeVereniging'])
        . "&shiften=" .                       implode(',', $fields['shiften'])
        . "&akkoordvoorwaarden=" .            toAscii($fields['akkoordvoorwaarden'])
        . "&akkoordvoorwaardenop=" .          toAscii($fields['akkoordvoorwaardenop'])
    ;
}

function toAscii($str) {
    return rawurlencode(strtr(utf8_decode(trim($str)),
        utf8_decode(
        'ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),
        'SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy'));
}
