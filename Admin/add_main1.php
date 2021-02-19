<?php
include_once('config.php');

?>
<?php

if(isset($_POST['shto'])) {	
	$m_title = mysqli_real_escape_string($conn,$_POST['m_title']);
	$m_description = mysqli_real_escape_string($conn,$_POST['m_description']);
	$m_pic = mysqli_real_escape_string($conn,$_POST['m_pic']);

    

	
	if(empty($m_title) || empty($m_description) || empty($m_pic) ) {
				
		if(empty($m_title)) {
			echo "<font color='red'>m_title field is empty.</font><br/>";
		}
		
		if(empty($m_description)) {
			echo "<font color='red'>m_description field is empty.</font><br/>";
		}
		if(empty($m_pic)) {
			echo "<font color='red'>m_pic field is empty.</font><br/>";
        }
       
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		
		$result = mysqli_query($conn, "INSERT INTO main (m_title,m_description,	m_pic) VALUES('$m_title','$m_description','$m_pic') ");
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='edit_main.php'>View Result</a>";
	}
}
?>