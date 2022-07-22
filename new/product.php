<div class="col-md-4 pb-1 pb-md-0 mb-3">
    <div class="card">
        <div class="card-img-top" alt="Card image cap"
            style="
                background-image : url(images/prodimg/<?=$row['img_name']?>);
                background-size : cover;
                background-position : center;
                aspect-ratio : 16/9;
            "
        ></div>
        <div class="card-body">
            <h5 class="card-title"><?=$row['prod_name']?></h5>
            <p class="card-text text-center"><?=$row['prod_des']?></p>
                <a data-toggle="modal" data-target="#prod-modal<?=$row['prod_id']?>" class="btn btn-primary">See Details</a>
        </div>
    </div>
</div>


<!-- prod modal -->


<div class="modal" id="prod-modal<?=$row['prod_id']?>">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5>
                    <!-- product name -->
                    <?=$row['prod_name']?> |
                    <a href="user.php?user=<?=$row['user_id']?>">
                        <?=$row['user_username']?>
                        <!-- user username -->
                    </a>
                </h5>
                <a class="close" data-dismiss="modal">x</a>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div style="
                            overflow-y: auto;
                            max-height : 600px;
                        " class="d-none d-sm-block">        
                            <?php
                                $prod_id = $row['prod_id'];
                                $sql = "SELECT img_name FROM prod_img_tb WHERE prod_id = '$prod_id'";
                                $resultinner = $conn->query($sql);
                                while($rowinner = $resultinner->fetch_assoc()) {
                                    ?>
                                        <div style="
                                            background-image: url(images/prodimg/<?=$rowinner['img_name']?>);
                                            aspect-ratio: 16/9;
                                            background-size : cover;
                                            background-position : center;
                                        " class="mb-3"></div>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="d-block d-sm-none">
                            <div class="slides">
                            <?php
                                $prod_id = $row['prod_id'];
                                $sql = "SELECT img_name FROM prod_img_tb WHERE prod_id = '$prod_id'";
                                $resultinner = $conn->query($sql);
                                while($rowinner = $resultinner->fetch_assoc()) {
                                    ?>
                                        <div style="
                                            background-image: url(images/prodimg/<?=$rowinner['img_name']?>);
                                            aspect-ratio: 16/9;
                                            background-size : cover;
                                            background-position : center;
                                        " class="mb-3"></div>
                                    <?php
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <table class="table text-right">
                            
                            <tr>
                                <td><b>Price</b></td>
                                <td>฿<?=$row['prod_price']?></td>
                            </tr>
                            <tr>
                                <td><b>Description</b></td>
                                <td><p><?=$row['prod_des']?></p></td>
                            </tr>
                            
                        </table>
                    </div>  
                        
                </div>
            </div>
            <div class="modal-footer">
                <?php 
                    if(!empty($_SESSION['user_id'])) {
                        ?>
                            <a data-toggle="modal" data-target="#chomodal" class="btn btn-success">Buy +</a>
                        <?php
                    } else {
                        ?>
                            <a class="btn btn-success disabled">Buy +</a>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="chomodal">
   <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            
        </div>
        <div class="modal-body">
            <form action="dbugfn.php" method='post'>
                <input type="text" name="" value="">
                <textarea name="address" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="">
            </form>
        </div>
        <div class="modal-footer">
            
        </div>
    </div>
   </div>
</div>



