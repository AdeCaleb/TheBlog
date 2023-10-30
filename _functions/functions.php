<?php
/**
 * Secures a string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Make the var_dump output more readable
 */
function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}