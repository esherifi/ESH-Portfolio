<?php
include('config.php');

$id_main = $_GET['id_main'];

$result = mysqli_query($conn, "DELETE FROM main WHERE id_main = '$id_main'");

header ("Location:edit_main.php");

?>