<?php
$con=mysqli_connect("localhost", "root", "", "camsdb");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
mysqli_error($con);
  ?>
