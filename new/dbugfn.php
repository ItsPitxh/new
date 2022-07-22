<?php
    include("fn.php");
    $user_id = $_SESSION['user_id'];
    $prod_id = $_POST['prod_id'];
    $shipping_address = $_POST['address'];
    
    if(isset($_FILES['receipt'])) {
      $img = $_FILE['receipt']['name'];
      $img = uniqid().'.'.pathinfo($_FILE['receipt']['name'].PATHINFO_EXTENSION);
      move_uploaded_file($_FILE['receipt']['tmp_name'],'images/'.$img);
    }

    $sql = "INSERT INTO `order_tb`(`order_shipping`, `order_date`, `order_receipt`, `order_status`, `prod_id`, `user_id`) VALUES ('$shipping_address','$time','$img','pending','$prod_id','$user_id')";
    $conn->query($sql);
?>