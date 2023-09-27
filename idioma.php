<?php

$defaultLanguage = 'es';

if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $preferedLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

    $preferedLanguage = substr($preferedLanguage, 0, 2);

    $suportedLanguage = ['en', 'fr'];

    if (in_array($preferedLanguage, $suportedLanguage)) {
        $defaultLanguage = $preferedLanguage;

    }
}

require_once 'languages/' . $defaultLanguage . '.php';

echo $shortText;

?>