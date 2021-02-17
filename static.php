





<?php 

  include("header.php");
  include("menu.php");
  include("database.php");


  $sql = "SELECT  *  FROM static ORDER BY sid DESC LIMIT 1";
  $result = dbQuery($sql);
  $row = dbFetchAssoc($result);
?>

<section class="image3 cid-speGi3qaeC" id="image3-2b">
    

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(255, 255, 255);">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="image-wrapper">
                    <img src="<?php echo $row['img'];?>"">
                    <p class="mbr-description mbr-fonts-style mt-2 align-center display-4">
                        <?php echo $row['datecreate'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php");