<html>
<link href="gradecalculator.css" rel="stylesheet">
<head>
	<div id='header' align="center">	
		<b class='titlewords'>Grade Calculator</b><br><br>
	</div>
</head>

<body>
</body>

</html>

<?php 
// Log in method with assistance from http://friesian.hubpages.com/hub/how-to-create-login-form-in-php
require 'core.inc.php';
require 'connection.inc.php';

if(loggedin())
 {  
 $username=$_SESSION['user_id'];
 
					if (isset($_POST['deletecoursebutton'])){
						$delete = $_POST['delete'];
						$check= mysql_query("SELECT * FROM courses  WHERE userid = '".$username."'  AND courseid = '$delete'") or die(mysql_error()); 
						$delq= mysql_query("DELETE FROM courses  WHERE userid = '".$username."'  AND courseid = '$delete'") or die(mysql_error()); 
						$delq2= mysql_query("DELETE FROM grades  WHERE userid = '".$username."'  AND courseid = '$delete'") or die(mysql_error()); 
					}
					if(isset ($_POST['createcoursebutton'])){
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
					}
					
					
 $result = mysql_query("SELECT * FROM members WHERE userid = '$username'") or die(mysql_error());  
 $getCourses = mysql_query("SELECT * FROM courses WHERE userid = '$username'") or die(mysql_serror());
               $data = mysql_fetch_array($result);  
			   $courseData = mysql_fetch_array($result);  
			   
			   $num_course_rows = mysql_num_rows($getCourses);
			   
   $userid=$data['userid'];
    
   echo 'Welcome! <b> ' . $username . '</b><a  href="logout.php"><input type="button"  value="Logout"/></a>';
   
   
   
   if($num_course_rows == 0)
   {
	   echo '<br><br>No Courses!<br><br>';
	   include 'createcoursebutton.html';
   }
   else{ 
   
			   
	   echo '<br><br>Courses: <br><br>';
	   for ($i = 0; $i < $num_course_rows; $i++){
			echo 'Course Name: ';
			echo mysql_result($getCourses, $i,'coursename');
			echo '<br>Course ID: ';
			echo mysql_result($getCourses, $i,'courseid');
			echo '<br>Semester: ';
			echo mysql_result($getCourses, $i,'semester');
			echo '<br><br>';
			//include 'gradebutton.html';
		}
		include 'delete.html';
		include 'select.html';
		
		
	   include 'createcoursebutton.html';
   }
   
 }
else
{
include 'login.inc.php';
}

function check(){
	if ($_POST['password1'] == $_POST['password2'])
	{
		return true;
	}
	else{
	return false;
	}
}
?>

