<?php
include_once("config.php");

if(isset($_POST['update_shrb']))
{	
	$id_main = $_POST['id_main'];
	
	$m_title=$_POST['m_title'];
	$m_description=$_POST['m_description'];
	$m_pic = $_POST['m_pic'];	
	
	if(empty($m_title) || empty($m_description) || empty($m_pic)) {	
			
		if(empty($m_title)) {
			echo "<font color='red'>Sherbimet field is empty.</font><br/>";
		}
		
		if(empty($m_description)) {
			echo "<font color='red'>Pershkrimi field is empty.</font><br/>";
		}
		if(empty($m_pic)) {
			echo "<font color='red'>Foto field is empty.</font><br/>";
        }	
	} else {	
		
		
		$result = mysqli_query($conn,"UPDATE main 
		SET
			m_title = '$m_title',
			m_description = '$m_description',
			m_pic = '$m_pic'
			WHERE id_main = '$id_main'
		");

		header("Location: edit_main.php");
	}
}
?>
<?php
if(isset($_GET['id_main'])) { 

$id_main= $_GET['id_main'];
}
  
$result = mysqli_query($conn,"SELECT * FROM main WHERE id_main = '$id_main'");


while($res = mysqli_fetch_array($result))
{
	$m_title = $res['m_title'];
	$m_description = $res['m_description'];
	$m_pic = $res['m_pic'];
	
}
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
	</head>
	<body class="is-preload">

	<!-- Header -->
		<?php include_once("header2.php"); ?>
	<!-- Header -->
		        

		<section>
	<a href="home.php" class="button go-back-btn">Go back</a>
	</section>
  

		<!-- Main -->
			<section id="main" class="wrapper ">
				<div class="inner update-menu-table">

				<div class="content">
					
				<div class="row">
<form  action="update_main.php" name="form1" method="post" enctype="multipart/form-data">
		<table border="0">
			<tr> 
				<td>Main title</td>
				<td><input type="text" name="m_title" value='<?php echo $m_title;?>' required /></td>
			</tr>
			<tr> 
				<td>Main description</td>
				<td><textarea name="m_description"  required ><?php echo $m_description;?></textarea></td>
			</tr>
			<tr> 
			<td>Main photo</td>
				<td><textarea name="m_pic"  required ><?php echo $m_pic;?></textarea></td>
			</td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_main" value='<?php echo $_GET['id_main'];?>' /></td>
				<td><input type="submit" name="update_shrb" value="Update"></td>
			</tr>
		</table>
	</form>


			</section>




		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php
// include('check.php');
?>