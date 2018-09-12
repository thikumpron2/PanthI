<?php
    include 'connect.php';
    $Name = $_REQUEST['Name'];
    $ID_card = $_REQUEST['ID_card'];
    $Disease = $_REQUEST['Disease'];
    $Phone_number = $_REQUEST['Phone_number'];
    $Email = $_REQUEST['Email'];
    $Password = $_REQUEST['Password'];
    $sql = "INSERT INTO customer(Name,ID_card,Disease,Phone_number,Email,Password)
    VALUES('$Name','$ID_card','$Disease','$Phone_number','$Email','$Password')";
    $result = mysqli_query($link,$sql) or die (mysqli_error($link));
    if($result){
        echo "<script type = 'text/javascript'>";
        echo "alert('ลงทะเบียนเสร็จสิ้น กรุณา login');";
        echo "window.location = 'index.php';";
        echo "</script>";
    }
    else{
        echo "<script type = 'text/javascript'>";
         echo "alert('ผิดพลาดกรุณาลองใหม่อีกครั้ง');";
         echo "window.location = 'index.php';";
         echo "</script>";
    }
    mysqli_close($link);
?>
