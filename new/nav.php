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
              <div class="input-group">
                <input class="form-control" type="search" placeholder="Search For Products" aria-label="Search">
                <div class="input-group-append">
                  <input type="submit" type="submit" value="🔍" class="btn btn-success">
                </div>
                  
              </div>
            <?php
              if(empty($_SESSION['user_id'])) {
                  ?>
                      <div class="dropdown dropdown-btn">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register / Log In</a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href='login.php'>Log In</a>
                            <div class="dropdown-divider"></div>
                            <a class='dropdown-item' href="register.php">Register</a>
                          </div>
                      </div>
                  <?php
              } else {
                if($_SESSION['user_status'] == "user" XOR $_SESSION['user_status'] == 'store') {
                  ?>
                    <div class="dropdown dropdown-btn">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="user.php?user=<?=$_SESSION['user_id']?>">User</a>
                        <div class="dropdown-divider"></div>
                        <a class='dropdown-item' data-toggle='modal' data-target='#logout-modal'>Log Out</a>
                      </div>
                    </div> 
                  <?php

                } else {
                  ?>
                    <div class="dropdown dropdown-btn">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item " href="user.php?user=<?=$_SESSION['user_id']?>">User</a>
                          <div class="dropdown-divider"></div>
                          <a class='dropdown-item' data-toggle='modal' data-target='#logout-modal'>Log Out</a>
                        </div>
                    </div> 
                  <?php


                }
              }
            ?>
          

				
        </div>
      </div>
    </nav>