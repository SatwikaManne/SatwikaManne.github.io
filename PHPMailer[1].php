<?php
/**
 * PHPMailer - PHP email creation and transport class.
 * PHP Version 5.5.
 *
 * @see         https://github.com/PHPMailer/PHPMailer/ The PHPMailer GitHub project
 * @author      Marcus Bointon
 * @author      Jim Jagielski
 * @author      Andy Prevost
 * @copyright   Copyright (c) 2004-2017 PHPMailer, https://github.com/PHPMailer/
 * @license     http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html GPL v2.0
 */

/**
 * PHPMailer spl_autoload implementation.
 * @param string $classname The name of the class to load
 */
function PHPMailerAutoload($classname)
{
    //Can't use __DIR__ as it's only in PHP 5.3+
    $filename = dirname(__FILE__).DIRECTORY_SEPARATOR.'class.'.strtolower($classname).'.php';
    if (is_readable($filename)) {
        require $filename;
    }
}

// Register PHPMailerAutoload with SPL autoloader stack.
spl_autoload_register('PHPMailerAutoload');
