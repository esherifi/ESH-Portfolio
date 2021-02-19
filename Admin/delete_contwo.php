<?php
include('config.php');

$id_contwo = $_GET['id_contwo'];

$result = mysqli_query($conn, "DELETE FROM containertwo WHERE id_contwo = '$id_contwo'");

header ("Location:edit_contwo.php");

?>