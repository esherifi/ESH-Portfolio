
<?php
include_once("config.php");

$result = mysqli_query($conn,"SELECT * FROM main ORDER BY id_main");
?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Admin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
		table td {
    padding: 0.75em 0.75em !IMPORTANT;
}
		</style>
	</head>
	<body class="is-preload">
    <section>
	<a href="home.php" class="button go-back-btn">Go back</a>
	</section>
		<!-- Header -->
	

		<?php include_once("header2.php"); ?>
        
		<!-- Header --> 



        <div class="table-wrapper">
	<form action="" method="post">  
	
	<table>
    <br>
	<tr>
	<h3 style='margin-left:0.8%;'>Search data</h3>
	</tr>
	<tr>

	<td>
	Type:
	</td>
	<td>
	<input style='margin-left:-20%;' type="text" name="term" placeholder=""/>
</td>
<td> <input style='margin-left:-38%;' type="submit" value="Submit" /></td>
</tr>
</table> 
</div>
</div>
</form> 
<div class="table-wrapper">
<table width='80%' border='0' >
	<div class="table-wrapper">
	<tr bgcolor='#CCCCCC'>
		<td>Main title</td>
		<td>Main description</td>
		<td>Photo</td>
        <td>Edit or delete</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string($conn,$_REQUEST['term']);    
$sql = mysqli_query($conn, "SELECT 
	id_main,
	m_title,
	m_description,
	m_pic
 FROM main
WHERE m_title LIKE '%".$term."%'
OR m_description LIKE '%".$term."%'");
while($row = mysqli_fetch_array($sql)){ 		
		echo "<tr>";
		echo "<td>".$row['m_title']."</td>";
		echo "<td width='380'>".$row['m_description']."</td>";
		echo "<td>".$row['m_pic']."</td>";	
		echo "<td><a href='update_main.php?id_main=$row[id_main]\"  class='button' class='button primary'>
		Edit</a> <a href =\"delete_main.php?id_main=$row[id_main]\" onClick=\"return confirm('Are you sure you want to delete this?')\" class='button' class='button primary'>
		Delete</a></td></tr>";
	}

}

?>
</div>
	</table>


						</div>
				</div>
				
<!-- Main -->
<section id="main" class="wrapper">
				<div class="inner">
		
				<div class="content">
					
				<div class="row">
			</section>

			


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>