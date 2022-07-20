<?php 
	include("fn.php");
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
  <body class="p-3">
	  <div class="d-flex justify-content-center align-items-center">
			<div style="width: 500px;">
				<div class="container bg-light mw-100 rounded p-3">
					<a href="index.php">
						<h1 class="text-center ">Logo</h1>
					</a>
					 
					  <form method="post" enctype="multipart/form-data">
						  <div class="row mx-0">
							  <div class="col pl-0 ">
								  <label for="f_name" class="d-block">First Name</label>
								  <input id="f_name"  name="fname" type="text" class="w-100 form-control" autofocus required/>
							  </div>
							<div class="col  pr-0">
								<label for="l_name" class="d-block">Last Name</label>
								  <input id="l_name" name="lname" type="text" class="w-100 form-control" required/>
							 </div>
							 
						  </div>
						<div class="row mx-0">
							<div class="col px-0">
								<label for="username">Username</label>
								<input type="text" name="username" class="w-100 form-control"  required/>
								<?php if(isset($_REQUEST['err'])){ ?><p class="text-danger text-right m-0 p-0">Error : This username's already been used</p><?php } ?>
							</div>  
						</div>
						<div class="row mx-0">
							<div class="col px-0 ">
								<label for="password">Password</label>
								<input type="password" name="password" class="w-100 form-control" required/>
							</div>  
						</div>
						<div class="row mx-0">
							<div class="col px-0 ">
								<label for="password">E-mail Address</label>
								<input type="email" name="email" class="w-100 form-control" required/>
							</div>  
						</div>
						<div class="row mx-0">
							<div class="col px-0 ">
								<label for="password">Home Address</label>
								<textarea name="address" id="" cols="30" rows="5" class="form-control" style="resize : none;" required></textarea>
							</div>  
						</div>
						
						<div class="row">
							<div class="col">
								<label>Profile Picture</label>
								<label for="ri1" class="display-img img-label"><h1>+</h1></label>
								<input type="file" name="pfp_input" class="img-input" id="ri1" accept="image/gif, image/jpeg, image/png" hidden>
							</div>
						</div>
						  
						<div class="row mx-0 py-3">
							<div class="col px-0"><input class="btn btn-success w-100 float-right" type="submit"  name="regis-btn"/></div>
						</div>
						
						
					  </form>
					   <hr>
					   <h6 class="text-right">Already Have An Account? <a href="login.php">Login</a></h6>
						  
				  </div>
			</div>
		
	  </div>
	  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
  </body>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/app.js"></script>
</html>