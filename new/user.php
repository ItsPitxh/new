<?php
  include("fn.php");
  
  $user_id = $_REQUEST['user'];
  $sql = "SELECT * FROM user_tb WHERE user_id = '$user_id'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  if($result->num_rows == 0) {
    header('location:index.php');
    exit();
  }

  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap eCommerce Page Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body>
  <?php
      include("nav.php");
    ?>
    <div class="container mt-3">
      <div class="row d-flex justify-content-start align-items-end h-100">
        <div class="col-6 col-md-3 px-0">
          <div class="pfp-div rounded" style="background-image: url('images/<?=$row['user_pfp']?>');"></div>
          
        </div>
        <div class="col-6 col-md-9 px-0">
            <div class="">
                <h1 class="mb-0"><?=$row['user_fname']?> <?=$row['user_lname']?></h1>
                <h6 class="mb-0"><?=$row['user_status']?></h6>
            </div>
            <?php
            if(!empty($_SESSION['user_id'])) {
              if($_SESSION['user_status'] == 'user') {
              ?>
                <div class="float-right">
                  <a class="btn btn-primary" data-toggle="modal" data-target="#regis-store-modal"><span class="my-auto text-white">Become A Seller 🏪</span></a>
                </div>
              <?php
            } else if ($_SESSION['user_status'] == 'pending') {
              ?>
                <div class="float-right">
                  <a class="btn btn-success" data-toggle="modal" data-target="#add-prod-modal"><span class="my-auto">Add Product ➕</span></a>
                  <a class="btn btn-primary" data-toggle="modal" data-target="#regis-store-modal"><span class="my-auto text-white">Confirm Orders ✔</span></a>
                </div>

              <?php
            } else{
              ?>
                <a class="btn btn-primary mx-0 float-right" data-toggle="modal" data-target="#regis-store-modal"><span class="my-auto text-white">Become A Seller</span></a>
              <?php
            }
          }
          ?>
        </div>
      </div>

    </div>
    <hr>
    <h2 class="text-center">YOUR PRODUCTS</h2>
    <hr>
    <div class="container">
      <div class="row text-center">
              <?php
                $sql = "SELECT * FROM prod_tb INNER JOIN user_tb ON prod_tb.user_id = user_tb.user_id INNER JOIN prod_img_tb ON prod_tb.prod_id = prod_img_tb.prod_id WHERE prod_tb.user_id = '$user_id' GROUP BY prod_tb.prod_id";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){
                  include("product.php");
                }
              ?>
      </div>
    </div>
   
    <hr>
    <div class="container text-white bg-dark p-4">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
          <div class="row text-center">
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-5 col-6">
          <address>
            <strong>MyStoreFront, Inc.</strong><br>
            Indian Treasure Link<br>
            Quitman, WA, 99110-0219<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
          </address>
          <address>
            <strong>Full Name</strong><br>
            <a href="mailto:#">first.last@example.com</a>
          </address>
        </div>
      </div>
    </div>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © MyWebsite. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    
    <?php 
      include("modals.php")
    ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
    <script src="js/app.js"></script>
    <script>
    </script>
  </body>
</html>