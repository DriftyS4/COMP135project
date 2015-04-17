<?php
require 'connection.inc.php';
$userid = $_POST['userid'];
$password = $_POST['password1'];
$query = mysql_query("SELECT * FROM members WHERE userid ='".$userid."' AND password ='".$password."'") or die(mysql_error()); 
 $data = mysql_fetch_array($query);
$query_run=$query;
$query_num_rows = mysql_num_rows($query_run);

if($query_num_rows==1)
{
echo 'ok';
$user_id= mysql_result($query_run,0,'userid');
$user_id=$data['userid'];
$_SESSION['user_id'] = $user_id;
header("Location:".$_SERVER['PHP_SELF']. " ");
}
?>