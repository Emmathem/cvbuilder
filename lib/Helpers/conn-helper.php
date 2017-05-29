<?php

/**
 * @author
 * Banjo Mofesola Paul
 * Chief Developer, Planet NEST
 * mofesolapaul@planetnest.org
 * Mon 8 May, 2017
 *
 * Helper for db connection credentials disambiguation
 */

#!- declarations
define('SCOPE', 'emmathem');
$_HOST = $_DBNAME = $_UNAME = $_PWD = '';

#!- initial values
$_HOST = 'localhost';
$_DBNAME = 'nwt-portal';
$_UNAME = 'root';
$_PWD = '';

#!- make your specific inclusions here
switch (SCOPE) {
    case 'emmathem':
        $_PWD = 'engineer';
        break;
    default:
        break;
}
