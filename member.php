<?php session_start();  
include('condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='member'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="logout.php">
	<h1>Member Page</h1>
	<h3> สวัสดี คุณ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h3>
	<input type="submit" value="ออกจากระบบ">
    </form>
    <h1>เพิ่มข่าว</h1>
    <div class="container">
	<div class="row">
    	<div class="col-md-3">
         <?php 
		
		 	if($level=="admin") {  ?>       
            <div class="list-group">
                  <a href="#" class="list-group-item active">
                    สำหรับ Admin
                  </a>
                  	<a href="#" class="list-group-item">link</a>
                  	<a href="#" class="list-group-item">link</a>
                   	<a href="#" class="list-group-item">link</a>
                   	<a href="#" class="list-group-item">link</a>
			</div>				
			<?php }elseif($level=="member") { ?>
            		<div class="list-group">
                  <a href="#" class="list-group-item active">
                    สำหรับสมาชิก 
                  </a>
                  <a href="list_articles.php" class="list-group-item">จัดการข่าว</a>
                  	<a href="#" class="list-group-item">link</a>
                  	<a href="#" class="list-group-item">link</a>
                   	<a href="#" class="list-group-item">link</a>
                   	<a href="#" class="list-group-item">link</a>                  
			</div>            
            <?php } elseif($level==3) { ?>
            
            	<div class="list-group">
                  <a href="#" class="list-group-item active">
                    สำหรับสมาชิก
                  </a>
                  <a href="#" class="list-group-item">devbanban</a>
		   <?php }else{ }  ?>
		         
        </div>
    </div>
</div>
</body>
</html>