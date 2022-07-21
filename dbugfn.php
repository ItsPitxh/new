<?php   
        include('fn.php');
        $user_id = $_SESSION['user_id'];
        $name = $_POST['prod-name'];
        $price = $_POST['prod-price'];
        $prod_cat = $_POST['prod-cat'];
        $prod_amt = $_POST['prod-amt'].' '.$_POST['prod-unit'];
        $prod_des = $_POST['prod-des'];
        
      
        $sql = "INSERT INTO `prod_tb` (`prod_name`, `prod_des`, `prod_cat_id`, `prod_amt`, `prod_price`, `prod_status`, `user_id`) VALUES ('$name','$prod_des','$prod_cat','$prod_amt','$price','in-stock','$user_id')";
        $conn->query($sql);
      
        $sql = "SELECT `prod_id` FROM `prod_tb` ORDER BY `prod_id` DESC";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $prod_id = $row['prod_id'];
        
        
        
        $fileCount = count($_FILES['prodimg']['name']);
      
        if(isset($_FILES['prodimg'])) {
        for($i=0;$i<$fileCount;$i++) {
            $img = $_FILES['prodimg']['name'][$i];
            $img = uniqid().'.'.pathinfo($_FILES['prodimg']['name'][$i],PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['prodimg']['tmp_name'][$i],"images/prodimg/".$img);
            $sql = "INSERT INTO `prod_img_tb` (`img_name`, `prod_id`) VALUES ('$img','$prod_id')";
            $conn->query($sql);
          }
        }

        
        // header("location: user.php?user=$user_id");
        // exit();
?>
<pre>
    <?php
        print_r($_FILES['prodimg']);
    ?>
</pre>