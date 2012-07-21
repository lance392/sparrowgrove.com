<?php
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     COMPANY:  3X Security, LLC (3X Security Services)
 *     WEBSITE: http://3xsecurityservices.com
 *        NAME: Login Script
 *        DATE: Oct 12, 2011
 *        FILE: login.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION:  Login Script
 *     LICENSE:
 *      
 */
//require_once("checkLogin.php");
//require_once('config/config.php');
/* End Configuration */


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="author" content="Christopher Sparrowgrove" />
 <meta name="description" content="Login Page For Members Only" />
 <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
  <title>MSP Login</title>
  <link type="text/css" rel="stylesheet" href="http://cwb110.com/beta/style.css" />
  <style type="text/css">
  label 
  {
    width: 4em;
    float: left;
    text-align: right;
    margin-left: 0.5em;
    display: block
    }
  .submit input 
  {
    margin-left: 5.5em;
  } 
  input 
  {
    color: #781351;
    background: #fee3ad;
    border: 1px solid #781351
  }
  .submit input 
  {
    color: #000;
    background: #ffa20f;
    border: 2px outset #d7b9c9
  } 
  fieldset
  {
    border: 1px solid #781351;
    width: 20em
  }
  legend 
  {
    color: #fff;
    background: #ffa20c;
    border: 1px solid #781351;
    padding: 2px 6px
  }                                                      
  .register 
  {
    font-size: 55%;
  }
  </style>
</head>
<body>
    <center>
    <form action="/fortcarson/ul/webversion/login.process.php" method="post">
        <fieldset>
            <legend>MSP Login</legend>
            <p><label for="Username">Username</label> <input type="text" name="username" /> </p>
            
            <p><label for="Password">Password</label> <input type="password" name="password" /> </p>
     
            <p><label for="register">Registration</label> <input type="checkbox" name="register" value="Yes" />Register  
                                                      <input type="checkbox" name="noregister" value="No" checked="checked" />I Am Registered </p>
            
            <p class="submit"> <input type="submit" name="submit" value="Login" /> </p>
        </fieldset>       
    </form>
<p class="select_footer">
            Version: <?PHP echo $version; ?> &copy;2010-2011 
           <a style='text-decoration:none;' target='_Blank' 
              href='<?PHP echo $copyright_link; ?>' alt="Developer" title="Lead Web Application Developer"><?PHP echo $copyright_label; ?></a><BR />
              <?php include ('fortcarson/links.php'); ?>
</body>
</html>