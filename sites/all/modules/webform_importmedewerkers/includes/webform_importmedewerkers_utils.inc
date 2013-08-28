<?php

function _webform_importmedewerkers_log($message, $variables, $severity) {
    watchdog("Webform Import Medewerkers", $message, $variables, $severity);
}
