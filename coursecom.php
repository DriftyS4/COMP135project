

<?php
require 'core.inc.php';
require 'connection.inc.php';
if ($_POST['coursename'] != null && $_POST['courseid'] != null &&
 $_POST['semester'] != null){
	$username=$_SESSION['user_id'];
	$semester = $_POST['semester'];
	$courseid = $_POST['courseid'];
	$coursename = $_POST['coursename'];
	$uname = mysql_query("SELECT * FROM courses WHERE userid = '".$username."' AND  courseid = '".$courseid."'") or die(mysql_error()); 
	$unum_rows = mysql_num_rows($uname);
	if($unum_rows == 0){
	 
	 
	 $squery = mysql_query("INSERT INTO courses VALUES ('$username', '$courseid', '$coursename', '$semester')") or die(mysql_error());
	 include 'success.html';
	 
	}
	else{
		echo 'Course ID exists!';
		include 'createCourse.php';
	}
 }
 else{
	 echo 'Please enter all fields with *';
	 include 'createCourse.php';
 }

?>