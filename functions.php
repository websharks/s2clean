<?php
if (!defined('WPINC')) {
    exit('Do NOT access this file directly.');
}
$GLOBALS['wp_php_rv'] = '7.0.1'; //php-required-version//
if (require(dirname(__FILE__).'/src/vendor/websharks/wp-php-rv/src/includes/check.php')) {
    require_once dirname(__FILE__).'/src/includes/stub.php';
}
