<?
session_start();
unset($_SESSION['sess_userid']);
session_destroy();
header('Location:admin.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />