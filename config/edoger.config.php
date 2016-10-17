<?php
/**
 *+------------------------------------------------------------------------------------------------+
 *| Edoger PHP Framework                                                                           |
 *+------------------------------------------------------------------------------------------------+
 *| A simple and efficient PHP framework.                                                          |
 *+------------------------------------------------------------------------------------------------+
 *| @package   edoger-php-src                                                                      |
 *| @license   MIT                                                                                 |
 *| @link      https://www.edoger.com/                                                             |
 *| @copyright Copyright (c) 2014 - 2016, QingShan Luo                                             |
 *| @version   1.0.0 Alpha                                                                         |
 *+------------------------------------------------------------------------------------------------+
 *| @author    Qingshan Luo <shanshan.lqs@gmail.com>                                               |
 *+------------------------------------------------------------------------------------------------+
 */
$conf = [];
// -------------------------------------------------------------------------------------------------

$conf['debug'] = true;

$conf['log_level'] = EDOGER_LEVEL_DEBUG;

$conf['cookie_secret_key'] = 'u8P9FwdiiAXmKbKT';
$conf['cookie_expire'] = 86400;
$conf['cookie_path'] = '/';
$conf['cookie_domain'] = '';
$conf['cookie_secure'] = false;
$conf['cookie_httponly'] = false;

$conf['session_timeout'] = 86400;

// -------------------------------------------------------------------------------------------------
return $conf;
