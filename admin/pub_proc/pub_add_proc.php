<?php
include('../../conn.php');

$cat_id = 1;
$post_body = $_POST['post_body'];
$post_media = '';
$post_created = date('d-m-Y');


if($_FILES['post_media']['error'] == 0) {
  $ext = end(explode('.',$_FILES['post_media']['name']));
  $post_media = md5(uniqid()).'.'.$ext;
  move_uploaded_file($_FILES['post_media']['tmp_name'],'../../img/'.$post_media);
}  
$query = mysqli_query($conn, "INSERT INTO post VALUES('','$my_id','$cat_id','$post_body','$post_media','$post_created')");
if($query) {
  succ('../pub_mng.php','บันทึกข้อมูลสำเร็จ');
}else {
  err('../pub_add.php','บันทึกข้อมูลไม่สำเร็จ');
}