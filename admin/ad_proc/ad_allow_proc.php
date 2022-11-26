<?php
include('../../conn.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "UPDATE advert SET ad_status = 1 WHERE ad_id = '$id'");

if($query) {
  succ('../ad_mng.php','อนุมัติสำเร็จ');
}else {
  err('../ad_mng.php','อนุมัติไม่สำเร็จ');
}