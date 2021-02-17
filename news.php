<section class="content3 cid-spa84demAB" id="content3-1t">
    <div class="container">
        <div class="mbr-section-head ">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>ข่าวสาร</strong></h4>
        </div>
        <div class="row mt-4">
            <?php      
                
                $sql = "SELECT * FROM articles ORDER BY a_id DESC  LIMIT  3";
                $result = dbQuery($sql);

                while ($row = dbFetchArray($result)) {?>
                
                        <div class="item features-image сol-12 col-md-6 col-lg-4">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img class="thumbnail" src="<?php echo $row['img'];?>">
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-4"><em><?php echo $row['datesave'];?></em></h5>
                                    <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong><?php echo $row['title'];?></strong></h6>
                                </div>
                                <div class="mbr-section-btn item-footer mt-2"><a href="news_detail.php?id=<?php echo $row['a_id'];?>" class="btn item-btn btn-primary-outline display-7" target="_blank">อ่านต่อ &gt;</a></div>
                            </div>
                        </div>
                    
                <?php } ?>
        </div>
    </div>
</section>