<?php
include('../../conn.php');

$post_id = $_POST['post_id'];
$post_body = $_POST['post_body'];
$post_media = $_POST['old_media'];

if($_FILES['post_media']['error'] == 0) {
  $ext = end(explode('.',$_FILES['post_media']['name']));
  $post_media = md5(uniqid()).'.'.$ext;
  move_uploaded_file($_FILES['post_media']['tmp_name'],'../../img/'.$post_media);
}  
$query = mysqli_query($conn, "UPDATE post SET
post_body = '$post_body',
post_media = '$post_media'
WHERE post_id = '$post_id'
");
if($query) {
  succ('../pub_mng.php','แก้ไขข้อมูลสำเร็จ');
}else {
  err('../pub_edit.php?id='.$post_id,'แก้ไขข้อมูลไม่สำเร็จ');
}