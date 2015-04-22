<html>

Grade calculator test page
<br><br><br>
</html>

<?php
require 'connection.inc.php';
require 'core.inc.php';
$username=$_SESSION['user_id'];
if (isset($_POST['select'])){

	$select=$_POST['select'];
	$grades= mysql_query("SELECT * FROM grades  WHERE userid = '".$username."'  AND courseid = '$select'") or die(mysql_error());	
	$course= mysql_query("SELECT * FROM courses  WHERE userid = '".$username."'  AND courseid = '$select'") or die(mysql_error()); 
	$num_grade_rows = mysql_num_rows($grades);
	$num_course_rows = mysql_num_rows($course);
	if($num_course_rows > 0){
		if($num_grade_rows > 0){
				
		echo '<br><br>grades: <br><br>';
			   for ($i = 0; $i < $num_grade_rows; $i++){
				   echo 'Course ID: ';
				   echo mysql_result($course, $i,'courseid');
				   echo '<br>Course Name: ';
					echo mysql_result($course, $i,'coursename');
					echo '<br><br> Assignment ID: ';
					echo mysql_result($grades, $i, 'assignment');
					echo '<br> Points Gained: ';
					echo mysql_result($grades, $i, 'pointsgained');
					echo '<br> Points Possible: ' ;
					$data = mysql_result($grades, $i, 'pointspossible');
					echo '<input type="text" id="pointspossible" 
					style="width: 80px" value = ',$data, '>';
					echo '<br> Percentage earned: ';
					echo mysql_result($grades, $i, 'percent');
			   }
		}
		else
					echo 'no grades';
	}
	else {
		echo 'Course not found<br>';
		include 'homebutton.html';
	}

}
?>