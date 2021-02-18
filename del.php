<?php  
include("database.php");
 $a_id = $_GET['del'];
 $sql = "DELETE  FROM articles WHERE a_id = $a_id";
 echo $sql;
 $result = dbQuery($sql);
 if($result){
     echo "<script> alert('Success');</script>";
     echo "<script>window.location.href = 'add_new.php';</script>";
 }else{
     echo "<script> alert('no');</script>";
     echo "<script>window.location.href = 'add_new.php';</script>";
 }

?>
