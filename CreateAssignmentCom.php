<?php
require 'core.inc.php';
require 'connection.inc.php';
$username=$_SESSION['user_id'];
if ($_POST['pointsgainedCA'] != null && $_POST['pointspossibleCA'] != null){
	$courseid = $_POST['courseidCA'];
	$pointsgained = $_POST['pointsgainedCA'];
	$pointspossible = $_POST['pointspossibleCA'];
	$Qassignment = mysql_query("SELECT * FROM grades WHERE userid = '".$username."' AND  courseid = '".$courseid."'") or die(mysql_error()); 
	$assignment_rows = mysql_num_rows($Qassignment);
	$assignment_rows++;
	$assignment = $assignment_rows;
	$squery = mysql_query("INSERT INTO grades VALUES ('$username', '$courseid', '$assignment', '$pointsgained', '$pointspossible', '0')") or die(mysql_error());
	include 'success.html';
	include 'returntogrades.html';
}
else include 'fail.html';
	
?>