<?php include('connect.php'); ?>

<?php 
$id=$_GET['id'];
$sql_delete="DELETE FROM thuctapsinh WHERE ID='$id' ";
mysqli_query($conn,$sql_delete);
header('location:index.php');
?>