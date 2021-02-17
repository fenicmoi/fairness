<?php  
// Include pagination library file
include("database.php");
include_once 'paginaton.class.php';

// Initialize pagination class
$baseURL = 'admin.php';
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
<section class="content5 cid-sp4Xgk1u7a bt-2" id="content5-1q">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="card mt-5">
                    <div class="card-header">
                        News Management
                    </div>
                    <div class="card-body">
                    <a class="btn btn-primary" href="add_new.php"><i class="fas fa-plus"></i> เพิ่มข่าว</a>
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

<section class="content5 cid-sp4Xgk1u7a bt-2" id="content5-1q">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="card mt-5">
                    <div class="card-header">
                        สถิติ
                    </div>
                    <div class="card-body">
                    <a class="btn btn-primary" href="add_stitic.php"><i class="fas fa-plus"></i></a>
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
                                    $sql = "SELECT * FROM static ORDER BY sid DESC LIMIT 0,5";
                                    $result = dbQuery($sql);
                                    $row  = dbNumRows($result);
                                    if($row > 0){?>
                                         <div class="post-list">
                                            <?php while($row = dbFetchArray($result)){ ?>
                                                     <a href="javascript:void(0);">
                                                    <?php 
                                                     echo "<tr>
                                                                <td>". $row['sid']."</td>
                                                                <td>". $row['title']."</td>
                                                                <td>".$row['datecreate']."</td>
                                                                <td> <a href='del_static.php?sid=".$row['sid']."' class='btn btn-danger btn-sm'>ลบ</a></td>
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

