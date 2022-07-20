<?php 
  include("fn.php");
  // session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | PLC</title>
    <!-- Bootstrap -->
   
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body>
    <?php
      include("nav.php");
    ?>
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/1920x500.gif" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <a href="#" class="text-white" data-toggle="modal" data-target="#prod-modal"><h5>Item 1 Heading</h5></a>
                  
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/1920x500.gif" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <a href="#" class="text-white" data-toggle="modal" data-target="#prod-modal"><h5>Item 2 Heading</h5></a>

                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/1920x500.gif" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                  <a href="#" class="text-white" data-toggle="modal" data-target="#prod-modal"><h5>Item 3 Heading</h5></a>

                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

    </div>
    <hr>
    <h2 class="text-center">RECOMMENDED PRODUCTS</h2>
    <hr>
    
    <div class="container">
      <div class="form-inline">
        <form action="" method="post">
          <select name="" class="form-control w-25 ml-auto">
            <option value="">Sort By...</option>
            <option value="">Name A-Z</option>
            <option value="">Price Low-High</option>
            <option value="">Date Added</option>
          </select>
          <input type="submit" class="btn ml-1" value='submit'>
        </form>
      </div>
      <div class="row text-center">
              <?php
                $sql = "SELECT * FROM prod_tb";
                $result = $conn->query($sql);
                while($row = $result->num_rows){
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
      include("modals.php");
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