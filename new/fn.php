<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "poly_db";
    $conn = new mysqli($server, $username, $password, $db);

    $time = date('y-m-d H:i:s');

    if($conn->connect_error) {
        die("Connection failed:".$conn->connect_error);
    }
    session_start();

    //======================== Registeration Execution ========================
    if(isset($_POST["regis-btn"])) {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $user = "user";

      if(isset($_FILES['pfp_input']['name'])) {
        $img = uniqid().'.'.pathinfo($_FILES['pfp_input']['name'],PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['pfp_input']['tmp_name'],"images/".$img);
      }
      

      $sql = "SELECT * FROM user_tb WHERE user_username = '".trim($username)."'";
      $result = $conn->query($sql);

      if($result->num_rows == 0) {
        // session_start();

        $sql = "INSERT INTO `user_tb` (`user_username`, `user_password`, `user_fname`, `user_lname`, `user_pfp`, `user_home_address`, `user_bank_acc`, `user_email`, `user_tel`, `user_cit_id`, `user_status`) VALUES ('$username','$password','$fname','$lname','$img','$address','','$email','','','$user')";
        $conn->query($sql);

        $sql = "SELECT * FROM user_tb WHERE user_username = '$username' AND user_password = '$password'";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_username'] = $row['user_username'];
        $_SESSION['user_password'] = $row['user_password'];
        $_SESSION['user_fname'] = $row['user_fname'];
        $_SESSION['user_lname'] = $row['user_lname'];
        $_SESSION['user_pfp'] = $row['user_pfp'];
        $_SESSION['user_home_address'] = $row['user_home_address'];
        $_SESSION['user_bank_acc'] = $row['user_bank_acc'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_tel'] = $row['user_tel'];
        $_SESSION['user_cit_id'] = $row['user_cit_id'];
        $_SESSION['user_status'] = $row['user_status'];

        header("location: index.php");
        exit();

      } else {
        session_destroy();
        header("location:register.php?err=1");
        exit();
        
      }

      
    }
    //======================== Authorizaion Log In Execution ========================
    if(isset($_POST['login-btn'])){
      // session_start();
      $username = $_POST['username'];
      $password = $_POST['password'];
      $sql = "SELECT * FROM user_tb WHERE user_username = '$username' AND user_password = '$password'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      if($result->num_rows != 0) {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_username'] = $row['user_username'];
        $_SESSION['user_password'] = $row['user_password'];
        $_SESSION['user_fname'] = $row['user_fname'];
        $_SESSION['user_lname'] = $row['user_lname'];
        $_SESSION['user_pfp'] = $row['user_pfp'];
        $_SESSION['user_home_address'] = $row['user_home_address'];
        $_SESSION['user_bank_acc'] = $row['user_bank_acc'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_tel'] = $row['user_tel'];
        $_SESSION['user_cit_id'] = $row['user_cit_id'];
        $_SESSION['user_status'] = $row['user_status'];
        
        header("location:index.php");
        exit();
      } else {
        session_destroy();
        header('location:login.php?err=1');
        exit();
      }
    }

//======================== Add Product Execution ========================
if(isset($_POST['add-prod-submit'])) {
  $user_id = $_SESSION['user_id'];
  $name = $_POST['prod-name'];
  $price = $_POST['prod-price'];
  $prod_amt = $_POST['prod-amt'];
  $prod_unit = $_POST['prod-unit'];
  $prod_des = $_POST['prod-des'];
  

  $sql = "INSERT INTO `prod_tb`(`prod_name`, `prod_des`, `prod_cat_id`, `prod_amt`, `prod_unit`, `prod_price`, `prod_status`, `user_id`) VALUES ('$name','$prod_des','','$prod_amt','$prod_unit','$price','in-stock','$user_id')";
  $conn->query($sql);
  
  $fileCount = count($_FILES['prodimg']['name']);
  
  if(isset($_FILES['prodimg']['size'])) {
  for($i=0;$i<$fileCount;$i++) {
      // $img = $_FILES['prodimg']['name'][$i]
      $img = uniqid().'.'.pathinfo($_FILES['prodimg']['name'][$i],PATHINFO_EXTENSION);
      move_uploaded_file($_FILES['prodimg']['tmp_name'][$i],"images/prodimg/".$img);
    }
  }
  
  header("location: user.php?user=$user_id");
  exit;
}    


    
    //======================== Logout Execution ========================
    if(isset($_REQUEST['logoutfn'])) {
      session_unset();
      header("location:index.php");
      exit;
    }

//======================== Calling Store Registeration Function ========================
  if(isset($_POST['store-regis'])) {
    $user_id = $_SESSION['user_id'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $bank_acc = $_POST['bank-id']." ".$_POST['bank-name'];
    $phone_num = $_POST['phone-country'].$_POST['phone-num'];
    $cit_id = $_POST['cit-id'];
    $sql = "UPDATE `user_tb` SET user_username = '$username', user_home_address = '$address', user_bank_acc = '$bank_acc',user_tel ='$phone_num', user_cit_id = '$cit_id' , user_time = '$time',user_status = 'pending' WHERE user_id = '$user_id'";
    $conn->query($sql);
    $_SESSION['user_username'] = $username;
    $_SESSION['user_home_address'] = $username;
    $_SESSION['user_bank_acc'] = $bank_acc;
    $_SESSION['user_tel'] = $phone_num;
    $_SESSION['user_cit_id'] = $cit_id;
    $_SESSION['user_status'] = 'pending';

    header("location: user.php?user=$user_id");
    exit;
  }
    


?>