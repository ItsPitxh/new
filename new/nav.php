<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand " href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
            
            
            
            
			<li>
			  
          </form>  

			</li>
        </ul>         
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"><button type="submit" hidden=""></button>
            <?php
              if(empty($_SESSION['user_id'])) {
                ?>
                  <div class="dropdown dropdown-btn btn-dark rounded">
                    <form action="" method="post">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register / Log In</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="register.php">Register</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item " href="login.php">Log In</a>
                    </form>
                          
                          
                      </div>
                  </div>
                <?php
              } else {
                if($_SESSION['user_status'] == "user" XOR $_SESSION['user_status'] == 'store') {
                  ?>
                    <div class="dropdown dropdown-btn">
                      <form action="" method="post">
                          <a class="nav-link dropdown-toggle text-white btn-dark rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item " href="user.php?user=<?=$_SESSION['user_id']?>">user</a>
                          <div class="dropdown-divider"></div>
                          <a class='dropdown-item' data-toggle='modal' data-target='#logout-modal'>Logout</a>
                      </form>
                            
                            
                        </div>
                    </div> 
                  <?php

                } else {
                  ?>
                      <div class="dropdown dropdown-btn">
                      
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="user.php?user=<?=$_SESSION['user_id']?>">user</a>
                            <div class="dropdown-divider"></div>
                            <a class='dropdown-item' data-toggle='modal' data-target='#logout-modal'>Logout</a>
      


                          </div>
                      </div> 
                  <?php


                }
              }
            ?>
          

				
        </div>
      </div>
    </nav>