<?php
require 'connection.inc.php';
//require 'core.inc.php';
$username=$_SESSION['user_id'];
//if(isset($_POST['save']) ){
	echo 'Saved!';
	$newcourseid = $_POST['courseid'];
	
	
	$forcheck = mysql_query("SELECT * FROM grades  WHERE userid = '".$username."'  AND courseid = '$newcourseid' ")
	or die(mysql_error());	
	$for_rows= mysql_num_rows($forcheck);
	for ($count = 0; $count < $for_rows; $count++){
	//$newcoursename = $_POST['coursename'];
	$newassignment = $_POST['assignment'.$count];
	$newpointspossible = $_POST['pointspossible'.$count];
	$newpointsgained = $_POST['pointsgained'.$count];
	
	$newpercent = $_POST['percent'.$count];
	$update= mysql_query("UPDATE grades SET pointspossible = '$newpointspossible',
	pointsgained = '$newpointsgained', 
	percent = '$newpercent' WHERE userid = '$username' AND courseid = '$newcourseid' AND assignment = '$newassignment'") or die(mysql_error());
	}
	
	//$checkid = mysql_query("SELECT * FROM courses  WHERE userid = '".$username."'  AND courseid = '$newcourseid'") or die(mysql_error());	
	
	
	
	//$checkassignment = mysql_query("SELECT * FROM grades  WHERE userid = '".$username."'  AND assignment = '$newassignment'") or die(mysql_error());	
	// checka_rows = mysql_num_rows($checkassignment);
	// $checkassignmentres = mysql_result($checkassignment, 0, 'assignment');
	// if($checka_rows == 0 && $checkassignmentres != $newassignment){
	// 		mysql_query("UPDATE grades SET assignment = '$new assignment'");
	//	}
	// else	
	// 	echo 'assignment exists';
	
	//$update_rows = mysql_num_rows($checkid);
	/*
	if($update_rows == 0){
		echo 'in';
		mysql_query("UPDATE grades SET courseid = '$newcourseid'");
		mysql_query("UPDATE courses SET courseid = '$newcourseid'");
	}*/
		
//}
?>