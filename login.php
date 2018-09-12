<?php
session_start();
    include 'connect.php';
    $Email = $_REQUEST['Email'];
    $Password = $_REQUEST['Password'];
    $sql = "SELECT * FROM customer WHERE Email = '$Email' and Password = '$Password'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result);
    echo $row['Password'];
    if(mysqli_num_rows($result)==1){
        $_SESSION["Email"]=$row['Email'];
        echo "<script type = 'text/javascript'>";
        echo "alert('เข้าสู่ระบบ');";
        echo "window.location='index-user.php'";
        echo "</script>";
    }
    else{
         echo "Email  หรือ Password ไม่ถูกต้อง";
    }
    mysqli_close($link);
?>
