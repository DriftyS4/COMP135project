<link href="gradecalculator.css" rel="stylesheet">
<div id='header' align="center">
<b class='titlewords'>Create A Course</b><br><br>
</div>
<form action="coursecom.php" method="POST">
<font color="red"><b>Please enter all fields with * </b></font><br><br>
Course name*: <input type="text" name="coursename"> 
<br>Course ID (ex. 135)*: <input type="text" name="courseid">
<br>Semester(ex. Spring 2015)*: <input type="text" name="semester">

<input type="submit" value="Create" name = "createcoursebutton">
<a 
href="createCourse.php" ></a>
</form>
<?php
include 'homebutton.html';
?>