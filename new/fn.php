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

      if(mysqli_num_rows($result) == 0) {
        $sql = "INSERT INTO `user_tb` (`user_username`, `user_password`, `user_fname`, `user_lname`, `user_pfp`, `user_home_address`, `user_bank_acc`, `user_email`, `user_tel`, `user_cit_id`, `user_status`) VALUES ('$username','$password','$fname','$lname','$img','$address','','$email','','','$user')";
        $conn->query($sql);
        echo "
          <script>
            window.location = 'index.php'
          </script>
        ";

      } else {
        echo "you can't do that ya SOB"; //false
        
      }

      
    }
    //======================== Authorizaion Log In Execution ========================
    if(isset($_POST['login-btn'])){
      session_start();
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
        header('login.php?err');
        exit;
      }
    }

//======================== Add Product Execution ========================
if(isset($_POST['add-prod-submit'])) {
  $user_id = $_SESSION['user_id'];
  $name = $_POST['prod-name'];
  $price = $_POST['prod-price'];
  
  $num = 1;
  $fileCount = count($_FILES['prodimg']['name']);
  
   if(isset($_FILES['prodimg']['name'])) {
   for($i=0;$i<$fileCount;$i++) {
       // $img = $_FILES['prodimg']['name'][$i]
       $img = uniqid().'.'.pathinfo($_FILES['prodimg']['name'][$i],PATHINFO_EXTENSION);
       move_uploaded_file($_FILES['prodimg']['tmp_name'][$i],"images/prodimg/".$img);
     }
   }
  
}    


    
    //======================== Logout Execution ========================
    if(isset($_POST['logout-btn'])) {
      session_start();
      session_destroy();
      header("location:index.php");
      exit();

    }


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
    
  }
    


?>