<?php
require 'connection.inc.php';
echo 'in submit.php';

$assignment = $_POST['assignment'];
$pointspossible = $_POST['pointspossible'];
$pointsgained = $_POST['pointsgained'];
$percent = $_POST['percent'];
$classnum = $_POST['classnum'];
if (check()){
	$squery = mysql_query("INSERT INTO grades VALUES ('$assignment', '$pointspossible', '$pointsgained', '$percent', '$classnum')") or die(mysql_error()); 
}
else 
	echo '<br> not all fields set';
function check(){
	if($_POST['assignment'] != null && $_POST['pointspossible'] != null && $_POST['pointsgained'] != null && $_POST['percent'] != null && $_POST['classnum'] != null)
	{
		return true;
	}
	else{
		return false;
	}
}
?>

<form action='index.php'>
    <input type="submit" value="Home">
	</form>