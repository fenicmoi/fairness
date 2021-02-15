
<section class="content5 cid-sp4Xgk1u7a bt-2" id="content5-1q">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="card mt-5">
                    <div class="card-header">
                        News Management
                    </div>
                    <div class="card-body">
                    <a class="btn btn-primary" href="add_new.php">เพิ่มข่าว</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>เรื่อง</th>
                                    <th>วันที่สร้าง</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php   
                                    $sql = "SELECT * FROM articles ORDER BY a_id DESC";
                                    $result = dbQuery($sql);
                                    while ($row = dbFetchArray($result)) {
                                        echo "<tr>
                                                  <td>". $row['a_id']."</td>
                                                  <td>". $row['title']."</td>
                                                  <td>".$row['datesave']."</td>
                                             </tr>";
                                    }
                                ?>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-muted">
                        Footer
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>