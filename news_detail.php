<?php 

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
                    <?php  
                        if($row['img'] == ''){  ?>
                        <img class="rounded" src="pic/image-default.png" alt="ภาพข่าว">
                    <?php  }else{  ?>
                        <img class="rounded" src="pic/<?php echo $row['img'];?>" alt="ภาพข่าว">
                    <?php  }?>
                   
                </div>
            </div>
            <div class="col-12 col-md ">
                <table class="table align-top">
                    <thead>
                        <tr>
                            <th>
                              <strong><?php echo $row['title'];?></strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 
                            <?php echo $row['txtMessage'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>Writer:<?php echo $row['m_username'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php");