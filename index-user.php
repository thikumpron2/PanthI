<!DOCTYPE html>
<html>
<head>
<title>Panthai</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
session_start();
  echo 'สวัสดี '.$_SESSION["userEmail"];
?>
<center>
    <img src="02.png" width="220" height="350"> <br>
</center>
<style>
    input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    float : right;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}

body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #f1f1f1;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px solid red;
}

.topnav a.active {
  border-bottom: 3px solid red;
}
</style>
</head>
<body>

<div class="topnav">
<a class="active" href="#home">หน้าหลัก</a>
        <a href="register.php">ให้ความรู้</a>
        <a href="#Promotion">โปรโมชั่น</a>
        <a href="#Contact">ติดต่อเรา</a>

        <div class="search-container">
            <form>
                <input type="text" name="search" placeholder="Search..">
              </form>
        </div>
</div>

</body>
</html>
