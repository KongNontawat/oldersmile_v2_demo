<?php
include('../../conn.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "UPDATE market SET mar_status = 1 WHERE mar_id = '$id'");

if($query) {
  succ('../mar_mng.php','อนุมัติสำเร็จ');
}else {
  err('../mar_mng.php','อนุมัติไม่สำเร็จ');
}