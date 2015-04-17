<html>
<div align="center">
<font color="blue"><b>Grade Calculator</b></font><br><br>
</div>

</html>

<?php 
// Log in method with assistance from http://friesian.hubpages.com/hub/how-to-create-login-form-in-php
require 'core.inc.php';
require 'connection.inc.php';

if(loggedin())
 {  
 $username=$_SESSION['user_id'];
 $result = mysql_query("SELECT * FROM members WHERE userid = '$username'") or die(mysql_error());  
 $getCourses = mysql_query("SELECT * FROM courses WHERE userid = '$username'") or die(mysql_serror());
               $data = mysql_fetch_array($result);  
			   $courseData = mysql_fetch_array($result);  
			   
			   $num_course_rows = mysql_num_rows($getCourses);
			   
   $userid=$data['userid'];
    
   echo 'Welcome! <b> ' . $username . '</b><a  href="../logout.php"><input type="button"  value="Logout"/></a>';
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
			include 'gradebutton.html';
		}
		include 'delete.html';
		
		
	   include 'createcoursebutton.html';
   }
 }
else
{
include 'login.inc.php';
}
include 'title.html';

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

