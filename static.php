
<?php 

  include("header.php");
  include("menu.php");
  include("database.php");
  
  if(isset($_GET['sid'])){
      $sid = $_GET['sid'];
      $sql = "SELECT  *  FROM static WHERE sid = $sid ";
  }else{
      $sql = "SELECT  *  FROM static ORDER BY sid DESC LIMIT 1";
  }

  //echo $sql;
  $result = dbQuery($sql);
  $row = dbFetchAssoc($result);
?>
<section class="image1 cid-spgBa4guux" id="image1-2j">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="<?php echo $row['img'];?>">
                    <p class="mbr-description mbr-fonts-style pt-2 align-center display-4">
                    <?php echo $row['datecreate'];?></p></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>ข้อมูลสถิติย้อนหลัง</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">
                    </p>
                    <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">วันที่</th>
                            <th scope="col"><i class="fas fa-chart-pie"></i> </th>
                        </tr>
                    </thead>
                    <tbody>
                          <?php  
                             $sql = "SELECT * FROM static ORDER BY sid DESC LIMIT 10";
                             $result = dbQuery($sql);

                             while($row = dbFetchArray($result)){
                                 echo "
                                       <tr>
                                            <td>".substr($row['datecreate'],0,10)."</td>
                                            <td> <a href='?sid=".$row['sid']."'>".$row["title"]."</a></td>
                                           
                                       </tr>
                                     ";
                             }
                          ?>
                    </tbody>
                    </table>

    
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php");