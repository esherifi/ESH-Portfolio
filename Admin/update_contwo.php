<?php
include_once("config.php");

if(isset($_POST['update']))
{	
	$id_contwo = $_POST['id_contwo'];
	
	$contwo_title=$_POST['contwo_title'];
	$contwo_description=$_POST['contwo_description'];
	$contwo_pic = $_POST['contwo_pic'];
	$layout = $_POST['layout'];
	
	if(empty($contwo_title) || empty($contwo_description) || empty($contwo_pic) || empty($layout)) {	
			
		if(empty($contwo_title)) {
			echo "<font color='red'>Title field is empty.</font><br/>";
		}
		
		if(empty($contwo_description)) {
			echo "<font color='red'>Description field is empty.</font><br/>";
		}
		if(empty($contwo_pic)) {
			echo "<font color='red'>Pic field is empty.</font><br/>";
        }	
		if(empty($layout)) {
			echo "<font color='red'>layout field is empty.</font><br/>";
        }	
	} else {	
		
		
		$result = mysqli_query($conn,"UPDATE containertwo 
		SET
			contwo_title = '$contwo_title',
			contwo_description = '$contwo_description',
			contwo_pic = '$contwo_pic',
			layout = '$layout'
			WHERE id_contwo = '$id_contwo'
		");

		header("Location: edit_contwo.php");
	}
}
?>
<?php
if(isset($_GET['id_contwo'])) { 

$id_contwo= $_GET['id_contwo'];
}
  
$result = mysqli_query($conn,"SELECT * FROM containertwo WHERE id_contwo = '$id_contwo'");


while($res = mysqli_fetch_array($result))
{
	$contwo_title = $res['contwo_title'];
	$contwo_description = $res['contwo_description'];
	$contwo_pic = $res['contwo_pic'];
	$layout = $res['layout'];
	
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
<form  action="update_contwo.php" name="form1" method="post" enctype="multipart/form-data">
		<table border="0">
			<tr> 
				<td>Contwo title</td>
				<td><input type="text" name="contwo_title" value='<?php echo $contwo_title;?>' required /></td>
			</tr>
			<tr> 
				<td>Contwo description</td>
				<td><textarea name="contwo_description"  required ><?php echo $contwo_description;?></textarea></td>
			</tr>
			<tr> 
			<td>Contwo photo</td>
				<td><textarea name="contwo_pic"  required ><?php echo $contwo_pic;?></textarea></td>
			</td>
			</tr>
			<tr> 
			<td>Contwo layout</td>
				<td><input name="layout" type="text"  required ><?php echo $layout;?></textarea></td>
			</td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_contwo" value='<?php echo $_GET['id_contwo'];?>' /></td>
				<td><input type="submit" name="update" value="Update"></td>
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