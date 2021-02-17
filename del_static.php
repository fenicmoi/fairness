<?php  
include("database.php");
 $sid = $_GET['sid'];
 $sql = "DELETE  FROM static WHERE sid = $sid";
 $result = dbQuery($sql);
 if($result){
     echo "<script> alert('Success');</script>";
     echo "<script>window.location.href = 'admin.php';</script>";
 }else{
     echo "<script> alert('no');</script>";
     echo "<script>window.location.href = 'admin.php';</script>";
 }

?>
