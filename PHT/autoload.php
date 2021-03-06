<?php
/**
 * PHT
 *
 * @author Telesphore
 * @link https://github.com/jetwitaussi/PHT
 * @version 3.0
 * @license "THE BEER-WARE LICENSE" (Revision 42):
 *          Telesphore wrote this file.  As long as you retain this notice you
 *          can do whatever you want with this stuff. If we meet some day, and you think
 *          this stuff is worth it, you can buy me a beer in return.
 */
spl_autoload_register(function ($class) {
    if (strpos($class, 'PHT\\') === 0) {
        $relative_NS = str_replace('PHT\\', '\\', $class);
        $translated_path = str_replace('\\', '/', $relative_NS);
		if (file_exists(__DIR__ . '/' . $translated_path . '.php')) {
			require_once __DIR__ . '/' . $translated_path . '.php';
		}
    }
});
