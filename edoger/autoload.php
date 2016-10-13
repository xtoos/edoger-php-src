<?php
/**
 *+------------------------------------------------------------------------------------------------+
 *| Edoger PHP Framework                                                                           |
 *+------------------------------------------------------------------------------------------------+
 *| A simple route analysis and matching module.                                                   |
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

// Automatic loader.
final class EdogerAutoload
{
	public static function load(string $name)
	{
		if (preg_match('/^Edoger\\\\/', $name)) {
			$path = EDOGER_PATH.ltrim(str_replace('\\', '/', $name), 'Edoger').'.php';
			if (file_exists($path)) {
				require $path;
			}
		}
	}
}

// Registered automatic loader.
spl_autoload_register([EdogerAutoload::class, 'load']);