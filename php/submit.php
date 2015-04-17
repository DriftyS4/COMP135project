<?php
require 'connection.inc.php';
echo 'in submit.php';
$classnum = $_POST['classnum'];
$assignment = $_POST['assignment'];
$pointspossible = $_POST['pointspossible'];
$pointsgained = $_POST['pointsgained'];
$percent = $_POST['percent'];

	$squery = mysql_query("INSERT INTO grades VALUES ('$classnum','$assignment', '$pointspossible', '$pointsgained', '$percent')") or die(mysql_error()); 

?>

<form action='index.php'>
    <input type="submit" value="Home">
	</form>