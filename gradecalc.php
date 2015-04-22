<html>

Grade calculator test page
<br><br><br>
<form action="gradecalc.php" method="POST">

<?php
require 'connection.inc.php';
require 'core.inc.php';
$username=$_SESSION['user_id'];



/*
if(isset($_POST['calculate'])){
	$courseid=$_POST['courseid'];
	$grades2= mysql_query("SELECT * FROM grades  WHERE userid = '".$username."'  AND courseid = '$courseid'") or die(mysql_error());	
	$course2= mysql_query("SELECT * FROM courses  WHERE userid = '".$username."'  AND courseid = '$courseid'") or die(mysql_error()); 
	$num_grade_rows2 = mysql_num_rows($grades2);
	$num_course_rows2 = mysql_num_rows($course2);
	
	for ($a=0; $a < $num_grade_rows2; $a++){
		$pointsgaineddata = mysql_result($grades2, $a, 'pointsgained');
		$pointspossibledata = mysql_result($grades2, $a, 'pointspossible');
		$assign = 
	}
}*/



if (isset($_POST['deletebutton'])){
			$delete = $_POST['assignment'];
			$courseid2 = $_POST['courseid'];
			$check= mysql_query("SELECT * FROM courses  WHERE userid = '".$username."'  AND courseid = '$delete'") or die(mysql_error()); 
			$delq= mysql_query("DELETE FROM grades  WHERE userid = '".$username."'  AND courseid = '$courseid2' AND assignment = '$delete'") or die(mysql_error()); 
			$num_delete_rows = mysql_num_rows($check);
}

if (isset($_POST['create'])){
	$courseid = $_POST['courseid'];
	$pointsgained = $_POST['pointsgainedCA'];
	$pointspossible = $_POST['pointspossibleCA'];
	$Qassignment = mysql_query("SELECT * FROM grades WHERE userid = '".$username."' AND  courseid = '".$courseid."'") or die(mysql_error()); 
	$assignment_rows = mysql_num_rows($Qassignment);
	$assignment_rows++;
	$assignment = $assignment_rows;
	$squery = mysql_query("INSERT INTO grades VALUES ('$username', '$courseid', '$assignment', '$pointsgained', '$pointspossible', '0')") or die(mysql_error());
}

if(isset($_POST['save']) ){
	include 'save.php';
}
if (isset($_POST['courseid'])){
//if ($_POST['courseid'] != null){
	$courseid=$_POST['courseid'];
	$grades= mysql_query("SELECT * FROM grades  WHERE userid = '".$username."'  AND courseid = '$courseid'") or die(mysql_error());	
	$course= mysql_query("SELECT * FROM courses  WHERE userid = '".$username."'  AND courseid = '$courseid'") or die(mysql_error()); 
	$num_grade_rows = mysql_num_rows($grades);
	$num_course_rows = mysql_num_rows($course);
	if($num_course_rows > 0){
		if($num_grade_rows > 0){
				echo 'Course ID: ';
				   $courseiddata = mysql_result($course, 0,'courseid');
				   echo $courseiddata;
					echo '<input type="text" name="courseid"
					style="width: 80px" value = ',$courseiddata, '>';
					
				    echo '<br>Course Name: ';
					$coursenamedata = mysql_result($course, 0,'coursename');
					echo '<input type="text" name="coursename" disabled = "true"
					style="width: 80px" value = ',$coursenamedata, '>';
					
					
		echo '<br><br>grades: ';
				$totalpercentage = 0;
				$totalpointspossible = 0;
				$totalpointsgained = 0;
			   for ($i = 0; $i < $num_grade_rows; $i++){
			
					echo '<br><br>Assignment ID: ';
					$assignmentdata = mysql_result($grades, $i, 'assignment');
					echo '<input type="text" name="assignment',$i,'" 
					style="width: 80px" value = ',$assignmentdata, '>';
					
					
					echo '   Points Gained: ';
					$pointsgaineddata = mysql_result($grades, $i, 'pointsgained');
					echo '<input type="text" name="pointsgained',$i,'" 
					style="width: 80px" value = ',$pointsgaineddata, '>';
					
					echo '   Points Possible: ' ;
					$pointspossibledata = mysql_result($grades, $i, 'pointspossible');
					echo '<input type="text" name="pointspossible',$i,'" 
					style="width: 80px" value = ',$pointspossibledata, '>';
					
					
					$totalpointspossible = $totalpointspossible + $pointspossibledata;
					$totalpointsgained = $totalpointsgained + $pointsgaineddata;
					
					echo '   Percentage earned: ';
					$percentagedata = ($pointsgaineddata / $pointspossibledata) * 100;
					$totalpercentage = $totalpercentage + $percentagedata;
					echo '<input type="text" name="percent',$i,'" id="',$i,'" 
					style="width: 80px" value = ',$percentagedata, '><br><br>';
					
					$update2= mysql_query("UPDATE grades SET pointspossible = '$pointspossibledata',
					pointsgained = '$pointsgaineddata', 
					percent = '$percentagedata' WHERE userid = '$username' AND courseid = '$courseid' AND assignment = '$assignmentdata'") or die(mysql_error());
			}
			echo '<br>Results: <br>';
			echo 'Total Points Gained: ', $totalpointsgained;
			echo '        Total Points Possible: ', $totalpointspossible;
			echo '        Total Percentage/ grade: ', ($totalpointsgained/$totalpointspossible) *100; //$totalpercentage / $num_grade_rows;
			   
		}
		else
					echo 'no grades';
	}
	else {
		echo 'Course not found<br>';
		//include 'homebutton.html';
	}
	//include 'CreateAssignmentButton.html';
}

function check(){
	if ($_POST['courseid'] == $_POST['password2'])
	{
		return true;
	}
	else{
	return false;
	}
}
?>
<br>
<br><br>
<input type="submit" value="Save and Calculate" name = "save">

<a href="gradecalc.php" ></a>
</form>



<br>
Insert Course ID of course you would like to drop.
<br>
<form action="gradecalc.php" method="POST">
Course ID: <input type = "text" name = "courseid" value = "<?php if(isset($_POST['courseid']))	echo $_POST['courseid']; ?>">
Assignment: <input type="text" name="assignment">
<input type="submit" value="Delete" name = "deletebutton">
<br><br>
<a 
href="delete.html" ></a>
</form>



<html>
<form action='CreateAssignment.php'>
<input type="submit" value="Create Assignment">
</form>
</html>

<form action='index.php'>
    <input type="submit" value="Home">
	</form>
</html>