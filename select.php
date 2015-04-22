<?php
require 'connection.inc.php';
require 'core.inc.php';
$username=$_SESSION['user_id'];
		if (isset($_POST['select'])){
			$select = $_POST['select'];
			$check= mysql_query("SELECT * FROM courses  WHERE userid = '".$username."'  AND courseid = '$select'") or die(mysql_error()); 
			$num_delete_rows = mysql_num_rows($check);
			if($num_delete_rows > 0)
				include 'success.html';
			else
				include 'fail.html';
		}
?>