<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: PHP Maintenanace
 *     WEBSITE: http://christopher.sparrowgrove.com
 *        NAME: Configuration File
 *        DATE: JULY 8, 2011
 *        FILE: config.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Global Configuration File
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2012 - All Rights Reserved   
 *      
 */

//MYSQL CONFIGURATION
$mysql_host = "mysql18.freehostia.com";
$mysql_user = "chrspa13_ei";
$mysql_pass = "cds1721win";
$mysql_database = "chrspa13_ei";

//MYSQLi Database Connector
$dbconnect = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_database);
if($dbconnect->connect_error)
{
	echo "The Server Is Currently Down. Please Contact the Webmaster and inform Them of a MySQL Error";
}
else
{
	$query = "SELECT * FROM server_config";
	$data = $dbconnect->prepare($query);
	$data->bind_result($id, $app_name, $ipv4_1, $ipv4_2, $admin, $email, $status, $status_msg, $version, $copyright_link, $copyright_label, $last_updated, $last_accessed);
	$data->execute(); 
	while($data->fetch())
    {
		$_SESSION['id'] = $id;
		$_SESSION['app_name'] = $app_name;
		$_SESSION['ipv4_1'] = $ipv4_1;
		$_SESSION['ipv4_2'] = $ipv4_2;
		$_SESSION['admin'] = $admin;
		$_SESSION['email'] = $email;
		$_SESSION['status'] = $status;
		$_SESSION['status_msg'] = $status_msg;
		$_SESSION['version'] = $version;
		$_SESSION['copyright_link'] = $copyright_link;
		$_SESSION['copyright_label'] = $copyright_label;
		$_SESSION['last_updated'] = $last_updated;
		$_SESSION['last_accessed'] = $last_accessed;
	}
}
?>