<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY: USO CMS
 *     WEBSITE: http://www.site.com
 *        NAME: Index Page  
 *        DATE: December 13, 2011
 *        FILE: index.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: index page
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2010 - All Rights Reserved   
 *      
 */

/* START CONFIGURATION */
include('login.php');
//require_once("checkLogin.php");
exit();
/*
require_once('../config/config.php');
 
if (!mysql_connect($mysql_host,$mysql_user,$mysql_pass)){die('Database Connect Error ');}
if (!mysql_select_db($mysql_database)){die('Database Select Error ');}

$config = mysql_query("SELECT * FROM config");
while($row = mysql_fetch_assoc($config))
  {
   $registration = $row['registration_status'];
   $useredit = $row['edit_users'];
   $registrationedit = $row['edit_registration'];
   $menuedit = $row['edit_menu'];
   $directionsedit = $row['edit_directions'];
   $activitiesedit = $row['edit_activities'];
  }

 //User Editing
 if ($useredit=="1")
 {
 $users = "<a href=''>Add</a> | <a href=''>Edit</a> | <a href=''>Delete</a> | <a href='config/users.php?update=0'>Disable</a>";
 }
 else
 {
 $users = "Add | Edit | Delete | <a href='config/users.php?update=1'>Enable<a>";
 }
 
 //Menu Editing
 if ($menuedit=="1")
 {
 $menu = "Add | <a href='/index.php?location=fortcarson&page=ul&get=update.menu'>Edit</a> | Delete | <a href='config/menu.php?update=0'>Disable</a>";
 }
 else
 {
 $menu  = "Add | Edit | Delete | <a href='config/menu.php?update=1'>Enable</a>";
 }
 
 //Directions Edit
  if ($directionsedit=="1")
 {
 $directions = "Add | <a href='directions.update.php'>Edit</a> | Delete | <a href='ul/webversion/config/directions.php?update=0'>Disable</a>";
 }
 else
 {
 $directions  = "Add | Edit | Delete | <a href='ul/webversion/vconfig/directions.php?update=1'>Enable</a>";
 }
 
 //Activities Edit
  if ($activitiesedit=="1")
 {
 $activities = "Add | Edit | Delete | <a href='ul/webversion/activities.php?update=0'>Disable</a>";
 }
 else
 {
 $activities = "Add | Edit | Delete | Enable";
 }
 
  //Hours Of Operation
  // Edit
  if ($ophoursedit=="1")
 {
 $ophours = "Add | Edit | Delete | <a href='ul/webversion/activities.php?update=0'>Disable</a>";
 }
 else
 {
 $ophours = "Add | Edit | Delete | Enable";
 }
 
  //Activities Edit
  if ($contactusedit=="1")
 {
 $contactus = "Add | Edit | Delete | <a href='ul/webversion/activities.php?update=0'>Disable</a>";
 }
 else
 {
 $contactus = "Add | Edit | Delete | Enable";
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Pannel</title>
        <meta name="author" content="Christopher Sparrowgrove" />
        <meta name="date" content="" />
        <meta name="company" content="" />
        <meta name="description" content="" />
        <meta name="license" content="http://www.site.com/index.php?get=license" />
        <meta name="keywords" lang="en-us" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="non_profit" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="" />
        <meta property="fb:admins" content="100001880332289" />
        <meta name="robots" content="index,follow" />
        <link rel="stylesheet" type="text/css" href="http://usocms.com/beta/style.css" />
        <style>
            fieldset { margin-top: 2%; margin-left: 35%; border:1px solid #781351; width:30em;}
            legend {color:#fff; background:#ffa20c; border:1px solid #781351; padding:2px 6px}
            .users {font-weight: bold;}
            .currentuser {border: 1px solid orange; margin-left: 8em; margin-top: -1em; align: left;}
            .register {border: 1px solid orange; margin-left: 8em; margin-top: -1em; align: left;}
            .menu {border: 1px solid orange; margin-left: 8em; margin-top: -1em; align: left;}
            .directions {border: 1px solid orange; margin-left: 8em; margin-top: -1em; align: left;}
            .activities {border: 1px solid orange; margin-left: 8em; margin-top: -1em; align: left;}
            .ophours {border: 1px solid orange; margin-left: 8em; margin-top: -1em; align: left;}
            .contactus {border: 1px solid orange; margin-left: 8em; margin-top: -1em; align: left;}
            label {width:6em; float:left; text-align:left; margin-left:1em;display:block; padding-top: 1em;}
         .submit input {margin-left: 5.5em;} 
         input {color:#781351; background:#fee3ad; border:1px solid #781351}
         textarea {color:#781351; background:#fee3ad; border:1px solid #781351}
         .submit input {color:#000; background:#ffa20f; border:2px outset #d7b9c9} 
        </style>
    </head>

    <body>
        <fieldset>
            <legend>USO CMS Control Pannel</legend>
            <p class="users">USERS</p>
                <label>Current Users:</label>
                <BR />
                <table class="currentuser">
                    <tr><td align="left">admin (level: 0) Edit | Delete</td></tr>
                    <tr><td align="left">kbarker (level: 1) Edit | Delete</td></tr>
                    <tr><td align="left">user (level: 1) Edit | Delete</td></tr>
                </table>
            <p class="registrations" />
                <label>Registration:</label>
                <BR />
                <table class="register">
                       <tr><td align="left"><?PHP echo $users; ?></td></tr>                
                </table>
                
                <br />
                    
                <p> <b>ADMINISTRATION</b> </p>
                
                <p />
                <label>Food Menu:</label>
                <BR />
                <table class="menu">
                       <tr><td align="left"><?PHP echo $menu; ?></td></tr>                
                </table>
                   
                
                <p />
                <label>Directions:</label>
                <BR />
                <table class="directions">
                       <tr><td align="left"><?PHP echo $directions; ?></td></tr>                
                </table>
                
                <p />
                <label>Activities:</label>
                <BR />
                <table class="activities">
                       <tr><td align="left"><?PHP echo $activities; ?></td></tr>                
                </table>
                
                <p />
                <label>Hours Of Operation:</label>
                <BR />
                <table class="ophours">
                       <tr><td align="left"><?PHP echo $ophours; ?></td></tr>                
                </table>
                
                <p />
                <label>Contact Us:</label>
                <BR />
                <table class="contactus">
                       <tr><td align="left"><?PHP echo $contactus; ?></td></tr>                
                </table>                
        </fieldset>
<p class="select_footer">
            Version: <?PHP echo $version; ?> &copy;2010-2011 
           <a style='text-decoration:none;' target='_Blank' 
              href='<?PHP echo $copyright_link; ?>' alt="Developer" title="Lead Web Application Developer"><?PHP echo $copyright_label; ?></a><BR />
              <?php include ('fortcarson/links.php'); ?>
    </body>
</html>
/*