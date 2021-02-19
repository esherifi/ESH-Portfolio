<?php
include_once('config.php');

?>
<?php

if(isset($_POST['shto'])) {	
	
    $menu_name = mysqli_real_escape_string($conn,$_POST['menu_name']);
	$menu_link = mysqli_real_escape_string($conn,$_POST['menu_link']);
	$menu_module = mysqli_real_escape_string($conn,$_POST['menu_module']);
	
	if(empty($menu_name) || empty($menu_link) || empty($menu_module)) {
				
		if(empty($menu_name)) {
			echo "<font color='red'>menu_name field is empty.</font><br/>";
		}
		
		if(empty($menu_link)) {
			echo "<font color='red'>menu_link field is empty.</font><br/>";
        }
        if(empty($menu_module)) {
			echo "<font color='red'>menu_module field is empty.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
			
		$result = mysqli_query($conn, "INSERT INTO menu (menu_name,menu_link,menu_module) VALUES('$menu_name',  '$menu_link', '$menu_module')");
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='editmenu.php'>View Result</a>";
	}
}
?>
<?php 
//include('check.php');
?>