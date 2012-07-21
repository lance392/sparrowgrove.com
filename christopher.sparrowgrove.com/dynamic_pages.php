<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 * ORIGINAL AUTHOR: PHP Academy  
 *          AUTHOR: Christopher Sparrowgrove
 *         COMPANY: PHP Maintenance
 *         WEBSITE: http://PHPAcademy.org
 *            NAME: Dynamic Page
 *            DATE: January 2012
 *            FILE: dynamic_pages.php
 *        LANGUAGE: PHP Hypertext Processor (PHP)
 *     DESCRIPTION: This script calls pages dynamicly based on what page the user requests.
 *         LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *       COPYRIGHT: ©Copyright 2012 - Some Rights Reserved   
 *      
 */

/* START CONFIGURATION */
$apps_directory = "applications/"; //Directory for which will be accessed
$valid_apps = scandir($apps_directory); //This scans the directory above outputting an array of all apps
unset($valid_apps[0], $valid_apps[1]);
//Unset apps you do not want accessed including 0 and 1 for security reasons.
//You can use print_r($valid_pages); to display the files in the $pages_directory

$pages_directory = "pages/"; //Directory for which will be accessed.
$valid_pages = scandir($pages_directory); //This scans the directory above outputing an array of all files
unset($valid_pages[0], $valid_pages[1]); 
//Unset files you do not want accessed including 0 and 1 for security reasons.
//You can use print_r($valid_pages); to display the files in the $pages_directory        
/* END CONFIGURATION */
if (isset($_GET['app']))
{
 $app_request = $_GET['app'];
  if (in_array($app_request.'.php', $valid_apps))
  {
   include($apps_directory.''.$app_request."/login.php");
   exit();
  }
}
if (isset($_GET['page'])) //The Original Code Used !empty but isset is more efficent.
{
	$page_request = $_GET['page'];
    if (in_array($page_request.'.php', $valid_pages)) //Check if requested file is valid
  	{
  		include($pages_directory.'/'.$page_request.'.php');
  	}
  	else 
  	{
		include($pages_directory.'/404.php');  	
	}
}
else
{
	include($pages_directory."/home.php");
}  
 ?>