<?php 
session_start(); 


  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: ../logout.php");  
  }  

  include("header.php");
  include("menu_admin.php");
  include("deskboard.php");
  include("footer.php");


  
?>
