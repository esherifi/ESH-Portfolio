<?php
include_once('config.php');

?>
<?php

if(isset($_POST['shto'])) {	
	$contwo_title = mysqli_real_escape_string($conn,$_POST['contwo_title']);
	$contwo_description = mysqli_real_escape_string($conn,$_POST['contwo_description']);
    $contwo_pic = mysqli_real_escape_string($conn,$_POST['contwo_pic']);
	$layout = mysqli_real_escape_string($conn, $_POST['contwo_layout']);
	
	if(empty($contwo_title) || empty($contwo_description)  || empty($contwo_pic) || empty($layout)) {
				
		if(empty($contwo_title)) {
			echo "<font color='red'>contwo_title field is empty.</font><br/>";
		}
		
		if(empty($contwo_description)) {
			echo "<font color='red'>contwo_description field is empty.</font><br/>";
		}
		
		if(empty($contwo_pic)) {
			echo "<font color='red'>contwo_pic field is empty.</font><br/>";
        }
		if(empty($layout)) {
			echo "<font color='red'>layout field is empty.</font><br/>";
        }
       
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		
		$result = mysqli_query($conn, "INSERT INTO containertwo (contwo_title,contwo_description,contwo_pic, layout) VALUES('$contwo_title','$contwo_description','$contwo_pic', '$layout') ");
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='edit_contwo.php'>View Result</a>";
	}
}
?>