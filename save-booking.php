<?php
  include 'connect.php';
  $select_date = $_POST['select'];
  $Shop_ID = $_POST['Shop_ID'];
  $Pain = $_POST['pain'];
  echo "$select_date<br>";
  echo "$Shop_ID<br>";
  echo "$Pain<br>";
  $sql = "INSERT INTO booking(Booking_date,Booking_massage,Pain,price,Customer_ID,Shop_ID,Type_ID)
  VALUES(NOW(),'$select_date','$Pain','','',$Shop_ID,'')";
  $result = mysqli_query($link,$sql) or die (mysqli_error($link));
  if($result){
      echo "Success";
  }
  else{
      echo "Error";
  }
  mysqli_close($link);
?>
