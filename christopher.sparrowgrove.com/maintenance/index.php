<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: 
 *     WEBSITE: http://christopher.sparrowgrove.com
 *        NAME: Server Status Message Board
 *        DATE: JULY 8, 2011
 *        FILE: index.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Server Status Mode Message System. This Script Configures and Sets a Message of Server Status Based on The 
 *              Error Code Supplied By The Database
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2012 - All Rights Reserved   
 *      
 */
require('../config/config.php'); //Require Global Configuration File
$status = $_SESSION['status']; //Grabs status value from config and assigns it to $status var
 	
	//Switch Operator for dynamicly assigning a status message to be displayed
 	switch($status)
 	{
		case 0: //Opperational Mode (Online Mode)
		echo "STATUS: Online<BR />";
		echo $_SERVER['SERVER_NAME']." is operating normaly";
		break;
		
		case 1: //Construction Mode
		echo "STATUS: Under Construction<BR />";
		echo $_SERVER['SERVER_NAME']." is under construction";
		break;
		
		case 2: //Offline Mode
		echo "STATUS: Offline<BR />";
		echo $_SERVER['SERVER_NAME']." is currently offline";
		break;
		
		default:
		echo "Invalid Status: The site may be temporaily down";
	}
?>  