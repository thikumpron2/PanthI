<!DOCTYPE html>
<html>
<head>
<title>Panthai</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
 include 'form-login.php';
?>

<style>
* {
    box-sizing: border-box;
}
.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
  }
@media only screen and (max-width: 100px) {
    .responsive {
        width: 100%;
    }
}
.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
<?php
include 'form-home.php';
 ?>
</head>
<body>
<div class="responsive">
  <div class="gallery">
    <table border="1" width="1000">
      <tr>
        <th>รหัสการจอง</th>
        <th>วันที่ เวลาที่จอง</th>
        <th>ชื่อร้าน</th>
        <th>ราคา</th>
        <th>ประเภท</th>
        <th>ชื่อ-นามสุกล</th>
        <th>เบอร์โทรศัพท์</th>
      </tr>
      <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
      </tr>
    </table>
  </div>
</div>
<map name="workmap">
  <area shape="rect" coords="34,44,270,350" alt="1234" href="computer.htm">
</map>
</body>
</html>
