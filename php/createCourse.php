
<form action="coursecom.php" method="POST">
<b>Create Course!</b><br><br>
<font color="red"><b>Please enter all fields with * </b></font><br><br>
Course name: <input type="text" name="coursename"> 
<br>Course ID (ex. 135)*: <input type="text" name="courseid">
<br>Semester(ex. Spring 2015) <input type="text" name="semester">

<input type="submit" value="Create">
<a 
href="createCourse.php" ></a>
</form>
<?php
include 'homebutton.html';
?>