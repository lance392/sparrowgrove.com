<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY:  
 *     WEBSITE: http://christopher.sparrowgrove.com
 *        NAME: Mysqli Configuration
 *        DATE: JULY 8, 2012
 *        FILE: mysqli.config.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: Database query
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: Â©Copyright 2010 - All Rights Reserved   
 *      
 */
//MY SQLi Config
$dbconnect = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_database);

if($dbconnect->connect_error){
   echo "Not connected, error: ".$dbconnect->connect_error;
}
else{
   echo "Connected.";
}
$query = "SELECT * FROM christopher";
$data = $dbconnect->prepare($query);
//$data->execute();
$data->bind_result($id, $app_name, $ipv4_1, $ipv4_2, $admin, $email, $status, $status_msg, $version, 
        $copyright_link, $copyright_label, $last_updated, $last_accessed);
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


?>