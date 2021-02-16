<?php 
session_start(); 
  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: logout.php");  
  }  

  include("header.php");
  include("menu.php");
  include("database.php");
  $a_id = $_GET['id'];

  $sql = "SELECT * FROM articles WHERE a_id = $a_id";
  $result = dbQuery($sql);
  $row = dbFetchAssoc($result);
?>

<section class="testimonials1 cid-spalfDUdh7" id="testimonials1-1u">
    <div class="container">
        
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="image-wrapper">
                    <img src="<?php echo $row['img'];?>" alt="Mobirise">
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper">
                    <p class="name mbr-fonts-style mb-1 display-4">
                        <strong><?php echo $row['title'];?></strong>
                    </p>
                    <p class="position mbr-fonts-style display-4">
                        <strong><?php echo $row['m_username'];?></strong>
                    </p>
                    <p class="mbr-text mbr-fonts-style mb-4 display-7"><?php echo $row['txtMessage'];?></p>
                    
                   
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php");