<?php 
session_start(); 
  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: logout.php");  
  }  

  include("header.php");
  include("menu_admin.php");
  include("database.php");
?>

<section class="form5 cid-sp4MbZ0F1j mt-5" id="form5-1n">
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>เพิ่มข่าว</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <div class="">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out
                            the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group" data-for="title">
                            <input type="text" name="txtTitle" placeholder="เรื่อง" data-form-field="title" class="form-control" value="" id="txtTitle">
                        </div>
                        <div class="col-12 form-group" data-for="txtMessage">
                            <textarea name="txtMessage" placeholder="รายละเอียด" data-form-field="txtMessage" class="form-control" id="txtMessage"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <button type="submit" id="btnSave" name="btnSave" class="btn btn-primary display-4">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php  
if(isset($_POST['btnSave'])){
    $title = $_POST['txtTitle'];
    $txtMessage = $_POST['txtMessage'];
    
    $sql = "INSERT INTO articles (title, txtMessage, m_username) VALUES '$title', '$txtMessage', '$name'";
    echo $sql;
    $result = dbQuery($sql);

    if($result){
        echo "<script> alert('success');</script>";
    }else{
        echo "<script> alert('no');</script>";
    }
}
?>
<?php    include("footer.php");?>