<?php
// Log in method with assistance from http://friesian.hubpages.com/hub/how-to-create-login-form-in-php
if(isset($_POST['userid'])&&isset($_POST['password']))
{
$userid = $_POST['userid'];
$password = $_POST['password'];
 
if(!empty($userid)&&!empty($password))
{
$query = mysql_query("SELECT * FROM members WHERE userid ='".$userid."' AND password ='".$password."'") or die(mysql_error()); 
 
$data = mysql_fetch_array($query);
 
$test=$data['password'];
 
$query_run=$query;
$query_num_rows = mysql_num_rows($query_run);
if($query_num_rows==0)
{
echo 'Invalid UserID or Password.';
}
else if($query_num_rows==1)
{
echo 'ok';
$user_id= mysql_result($query_run,0,'userid');
$user_id=$data['userid'];
$_SESSION['user_id'] = $user_id;
header("Location:".$_SERVER['PHP_SELF']. " ");
}
{
}
 
}
else
{
echo 'Please enter both a username and password.';
}
 
}
 
?>
<div align="center">
<form action="<?php echo $current_file; ?>" method="POST">
UserID: <input type="text" name="userid"> Password: <input type="password" name="password">
<input type="submit" value="Log in">
</form>
</div>

<br>New user?
<FORM action="register.php"><INPUT type=submit value="Register"><a
href="register.php" ></a></FORM>
