<?php
include('config.php');

$id_menu = $_GET['id_menu'];

$result = mysqli_query($conn, "DELETE FROM menu WHERE id_menu = '$id_menu'");

header ("Location:editmenu.php");

?>