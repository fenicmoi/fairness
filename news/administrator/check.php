<?php
$user_login=$_POST["user_login"];
$pass_login=$_POST["pass_login"];

if($user_login=="admin"and $pass_login=="admin")
{
	session_start();
	$_SESSION["sess_userid"]=session_id();
	header("Location:index.php");
	}else{

		echo "<meta http-equiv=refresh content=0;URL=admin.php>";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />