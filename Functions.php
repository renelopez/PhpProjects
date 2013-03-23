<?php

function printConversionCtoF() {
    $i = 0;
    for ($i = 0; $i < 101; $i++) {
        convertCelsiusToFahrenheit($i);
    }
}

function convertCelsiusToFahrenheit($celsius) {
    $result = (1.8 * $celsius) + 32;
    echo("<tr>");
    echo("<td>" . $celsius . "</td>");
    echo("<td>" . $result . "</td>");
    echo("</tr>");
}

function countLetters($word, $letter) {
    $counter = substr_count($word, strtoupper($letter));
    $counter+= substr_count($word, strtolower($letter));
    return $counter;
}

function validateRFC($rfc) {
    $isValid = preg_match("/^[A-Za-z]{3,4}[0-9]{6}[A-Za-z0-9]{3}$/", $rfc);
    return $isValid;
}

function cleanChars($rfc) {
    $noSpace = preg_replace('!\s+!', ' ', $rfc);
    $newRFC = preg_replace("/[^a-zA-Z0-9\s]+/", "", $noSpace);
    return $newRFC;
}

?>
