<?php
	include("fn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | PLC</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body class="p-3">
	  <div class="d-flex justify-content-center align-items-center">
		<div style="width: 500px;">
			<div class="container bg-light mw-100 p-3 rounded">
				<a href="index.php"><h1 class="text-center disabled">Logo</h1></a>
				  
				  <form action="" method="post">
	
	
					<div class="row mx-0">
						<div class="col px-0">
							<label for="username">Username</label>
							<input type="text" name='username' class="w-100 form-control" />
						</div>  
					</div>
					<div class="row mx-0">
						<div class="col px-0">
							<label for="password">Password</label>
							<input type="password" name='password' class="w-100 form-control" />
							<?php
								if(isset($_REQUEST['err'])) {
									?>
										<p class="text-danger text-right m-0 p-0">User not found : Your username and password may not corrected</p>
									<?php
								}
							?>
						</div>  
					</div>
					<div class="row mx-0 py-3">
						<div class="col px-0"><input class="btn btn-success w-100 float-right" type="submit" name="login-btn"/></div>
					</div>
					
				  </form>
				  <hr>
				 <h6 class="text-right">Don't Have An Account? <a href="register.php">Register</a></h6>
				  
				  
			  </div>
		</div>
		  
	  </div>
	  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
  </body>
</html>