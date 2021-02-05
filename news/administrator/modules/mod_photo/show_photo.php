<?
session_start();
if ($_SESSION[sess_userid]<>session_id())
{
	header("Location: ../../admin.php");
	exit();
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>

</head>

<body>
<?
include("../../../include/connect.php");    
    $strSQL = "SELECT * FROM nt_photo where id_act='$id_act' and id_photo='$id_photo' ";
    $objQuery = mysql_query($strSQL);
    $objResult = mysql_fetch_array($objQuery);
    if($objResult)
	{
	echo"<img src='myphoto/$objResult[name_photo]' >";
	}
	else
	{	
	echo"¼Ô´¾ÅÒ´";
	}
    ?>
</body>
</html>
