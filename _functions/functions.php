<?php
/**
 * Permet de sécurisé une chaine de charactère
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Rend les output de var_dump plus lisible
 */
function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}