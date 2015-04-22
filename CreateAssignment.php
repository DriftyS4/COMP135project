
<form action="gradecalc.php" method="POST">
<b>Create Assignment!</b><br><br>
<font color="red"><b>Please enter all fields with * </b></font><br><br>
Course ID*: <input type="text" name="courseid"> <br>
Points Gained*: <input type="text" name="pointsgainedCA"> 
<br>Points Possible*: <input type="text" name="pointspossibleCA">

<input type="submit" value="Create" name = "create">
<a 
href="CreateAssignment.php" ></a>
</form>
<?php
/*
require 'core.inc.php';
require 'connection.inc.php';
$username=$_SESSION['user_id'];
if (isset($_POST['pointsgainedCA']) != null && isset($_POST['pointspossibleCA']) != null){
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
}*/
?>