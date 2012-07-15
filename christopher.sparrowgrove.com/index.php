<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: 
 *     WEBSITE: http://christopher.sparrowgrove.com
 *        NAME: index.php
 *        DATE: JULY 8, 2012
 *        FILE: index.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: CMS Application
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2012 - All Rights Reserved   
 *      
 */

require_once('config/config.php'); //Global Configurations Script
$status = $_SESSION['status']; //Server Status

$VALID_STATUS = array('0', '1', '2', '3'); 
//Valid Server Status Codes Above
//STATUS CODES: 
//Code 0: Operational
//Code 1: Under Construction
//Code 2: Offline (connect error)
//Code 3: Offline (Shutdown)

if (in_array($status, $VALID_STATUS))
{
	switch($status)
	{
		case 0: //If in Operational Mode
			include ('dynamic_pages.php');
			break;
		case 1||2||3: //If in any other valid mode
			include("maintenance/index.php");
		
	}
	exit();
}
echo "There is an error with the server. Please notify a webmaster";
 ?>