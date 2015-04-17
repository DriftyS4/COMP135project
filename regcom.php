<?php
require 'connection.inc.php';
if ($_POST['userid'] != null && $_POST['password1'] != null && $_POST['password2'] != null){

$userid = $_POST['userid'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$uname = mysql_query("SELECT * FROM members WHERE userid = '".$userid."'") or die(mysql_error()); 
$unum_rows = mysql_num_rows($uname);

if ($unum_rows == 0){
if (check()){
echo '<div align="center"><font color="green"><b>Registration complete!</b></font></div>';
$squery = mysql_query("INSERT INTO members VALUES ('$userid', '$password1')") or die(mysql_error()); 
}
else{
	echo '<div align="center"><font color="red"><b>Passwords do not match.</b></font></div>';
	include 'register.php';
	}
}
else{
	echo '<div align="center"><font color="red"><b>User already exists.</b></font></div>';
	include 'register.php';
	}
}
else{
echo '<div align="center"><font color="red"><b>Please Enter all fields with an *</b></font></div>';
include 'register.php';
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
<html>
<FORM action="index.php"><INPUT type=submit value="Return"><a
href="register.php" ></a></FORM>
</html>
