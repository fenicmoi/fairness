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
  include("function.php");
?>

<section class="form5 cid-sp4MbZ0F1j mt-5" id="form5-1n">
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-4"><strong><kbd>เพิ่มเอกสาร</kbd></strong></h3>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"  enctype="multipart/form-data">
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group" data-for="title">
                            <input type="text" name="fileName" placeholder="ชื่อเอกสาร" data-form-field="title" class="form-control" value="" id="fileName">
                        </div>
                        <div class="col-12 form-group" data-for="doc">
                            <input class="form-control" type="file" name="file_upload" id="file_upload">
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
$baseURL = 'add_doc.php';
$limit = 5;

// Paging limit & offset
$offset = !empty($_GET['page'])?(($_GET['page']-1)*$limit):0;

// Count of all records

$sqlRow = "SELECT  *  FROM  doc";
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
                        Download Management
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
                                    $sql = "SELECT * FROM doc ORDER BY d_id DESC LIMIT $offset,$limit ";
                                    $result = dbQuery($sql);
                                    $row  = dbNumRows($result);
                                    if($row > 0){?>
                                         <div class="post-list">
                                            <?php while($row = dbFetchArray($result)){ ?>
                                                     <a href="javascript:void(0);">
                                                    <?php 
                                                     echo "<tr>
                                                                <td>".$row['d_id']."</td>
                                                                <td>".$row['title']."</td>
                                                                <td>".$row['fileName']."</td>
                                                                <td>".substr($row['dateCreate'],0,10)."</td>
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
    $title = $_POST['fileName'];

    if(isset($_FILES['file_upload'])){
        $file_name =  $_FILES['file_upload']['name'];
        $tmp_name =  $_FILES['file_upload']['tmp_name'];
        $bytes = $_FILES['file_upload']['size'];
       
        //rename file
        
       $size = formatSizeUnits($bytes);
        
        $locate_img ="doc/";
        $check = move_uploaded_file($tmp_name,$locate_img.$file_name);
        $pic = $file_name;

        if($check == true){
            echo "<script>alert('แนบไฟล์เอกสารเรียบร้อยแล้ว');</script>";
        }
        
    }


    $sql = "INSERT INTO doc (title, fileName, size) VALUES ('$title', '$file_name', '$size')";
    echo $sql;
    $result = dbQuery($sql);

    if($result){
        echo "<script> 
                 window.location.href = 'add_doc.php';
             </script>";
        
    }else{
        echo "<script> alert('no');</script>";
    }
    
}
?>
<?php    include("footer.php");?>
