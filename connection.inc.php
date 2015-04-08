<?php
// Log in method with assistance from http://friesian.hubpages.com/hub/how-to-create-login-form-in-php
$dbc = mysql_connect('localhost','root','') or  die("Cant connect :" . mysql_error());
 
mysql_select_db("gradecalculator",$dbc)
 
or
die("Cant connect :" . mysql_error()); 
 
?>