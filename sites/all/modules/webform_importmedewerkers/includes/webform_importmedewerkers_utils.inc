<?php

function _webform_importmedewerkers_log($message, $severity) {
    watchdog("Webform Import Medewerkers", $message, array(), $severity);
}
