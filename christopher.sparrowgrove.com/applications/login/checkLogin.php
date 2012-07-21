<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY:  
 *     WEBSITE: http://christopher.sparrowgrove.com
 *        NAME: Login Script
 *        DATE: 
 *        FILE: 
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION:  
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */
session_start();

/* START CONFIGURATION */
require_once('config/config.php');
/* END CONFIGURATION */

if (!isset ($_SESSION['username'])) //IF A SESSION VALUE FOR USERNAME EXISTS. USER IS LOGGED IN
{
   include('login.php');
   echo "<BR><a href='http://beta.usocms.com/index.php?location=fortcarson&page=ul&get=demo'>CLICK HERE FROM DEMO LOGIN </a>";
   exit();
}
else
{
    echo $_SESSION['username'];
}

