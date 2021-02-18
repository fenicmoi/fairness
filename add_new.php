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
 <script type=”text/javascript” src=”ckeditor/ckeditor.js”></script>

<section class="form5 cid-sp4MbZ0F1j mt-5" id="form5-1n">
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong><kbd>เพิ่มข่าว</kbd></strong></h3>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"  enctype="multipart/form-data">
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group" data-for="title">
                            <input type="text" name="txtTitle" placeholder="เรื่อง" data-form-field="title" class="form-control" value="" id="txtTitle">
                        </div>
                        <div class="col-12 form-group" data-for="txtMessage">
                            <textarea name="txtMessage" id="txtMessage" placeholder="รายละเอียด" data-form-field="txtMessage" class="form-control" ></textarea>
                        </div>
                        <div class="col-12 form-group" data-for="img">
                            <input class="form-control" type="file" name="img" id="img">
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
include_once 'paginaton.class.php';

// Initialize pagination class
$baseURL = 'add_new.php';
$limit = 5;

// Paging limit & offset
$offset = !empty($_GET['page'])?(($_GET['page']-1)*$limit):0;

// Count of all records

$sqlRow = "SELECT  *  FROM  articles";
$result = dbQuery($sqlRow);
$rowCount = dbNumRows($result);

// Initialize pagination class
$pagConfig = array(
    'baseURL' => $baseURL,
    'totalRows'=>$rowCount,
    'perPage'=>$limit
);
$pagination =  new Pagination($pagConfig);
?>
<section class="" id="content5-1q">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="card mt-0">
                    <div class="card-header">
                        News Management
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>เรื่อง</th>
                                    <th>วันที่สร้าง</th>
                                    <th><i class="fas fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php   
                                    $sql = "SELECT * FROM articles ORDER BY a_id DESC LIMIT $offset,$limit ";
                                    $result = dbQuery($sql);
                                    $row  = dbNumRows($result);
                                    if($row > 0){?>
                                         <div class="post-list">
                                            <?php while($row = dbFetchArray($result)){ ?>
                                                     <a href="javascript:void(0);">
                                                    <?php 
                                                     echo "<tr>
                                                                <td>". $row['a_id']."</td>
                                                                <td>". $row['title']."</td>
                                                                <td>".$row['datesave']."</td>
                                                                <td> <a href='del.php?del=".$row['a_id']."' class='btn btn-danger btn-sm'>ลบ</a></td>
                                                            </tr>";
                                                    ?>
                                                    </a>
                                            <?php } ?>
                                           
                                        </div>
                                   <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-muted">
                    <?php echo $pagination->createLinks(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php  
if(isset($_POST['btnSave'])){
    $title = $_POST['txtTitle'];
    $txtMessage = $_POST['txtMessage'];

    if(isset($_FILES['img'])){
        $name_file =  $_FILES['img']['name'];
        $tmp_name =  $_FILES['img']['tmp_name'];
        $locate_img ="pic/";
        $check = move_uploaded_file($tmp_name,$locate_img.$name_file);
        $pic = $locate_img.$name_file;

        if($check == true){
            echo "<script>alert('Success');</script>";
        }
    }


    
    $sql = "INSERT INTO articles (title, txtMessage, img, m_username) VALUES ('$title', '$txtMessage','$pic' ,'$name')";
    $result = dbQuery($sql);

    if($result){
        echo "<script> 
                 window.location.href = 'add_new.php';
             </script>";
        
    }else{
        echo "<script> alert('no');</script>";
    }
    
}
?>
<?php    include("footer.php");?>



<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('txtMessage');
    function CKupdate() {
        for (instance in CKEDITOR.instances)
            CKEDITOR.instances[instance].updateElement();
    }
</script>