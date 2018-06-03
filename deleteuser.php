<?php 
$conn = new mysqli("localhost", "root", "123456789a", "DAW");
$id=$_REQUEST['id'];
$sql="DELETE FROM users WHERE id='$id'";
$conn->query($sql);
header('Location: ./admin.php');
?>