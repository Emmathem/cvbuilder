<?php
/*
 * @author
 * Banjo Mofesola Paul
 * Chief Developer, Planet NEST
 * mofesolapaul@live.com
 * Wednesday, June 22, 2016
 */

#!-- Are we in debug mode?
if (!defined('DEBUG')) define('DEBUG',true);

#!-- turn on error logging when in live mode
if (!DEBUG) {
    ini_set("log_errors", 1);
    ini_set("error_log", "error.log");
}

$matches = array();
$url = isset($_SERVER['REDIRECT_URL'])? $_SERVER['REDIRECT_URL']:$_SERVER['REQUEST_URI'];
$url = preg_replace('#http(s)?://#', '', $url);

$slashes = preg_match_all('/\//', $url, $matches);

if (DEBUG) $slashes -= 1;

$x_link_prefix = $link_prefix = ''; #x_link_prefix: external link prefix
for ($i=0;$i<$slashes;$i++) {
    $x_link_prefix .= '../';
    if ($i > 0) $link_prefix .= '../';
}

define('LINK_PREFIX', ($link_prefix == '')? './':$link_prefix);
define('X_LINK_PREFIX', ($x_link_prefix == '')? './':$x_link_prefix);
define('ADMIN_PREFIX', LINK_PREFIX.'admin/');
# !-Compute relative linking prefix

?>
