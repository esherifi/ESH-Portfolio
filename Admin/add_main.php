<?php
include_once('config.php');
session_start();
if (!isset($_SESSION['username'])) {
	header('location: index.php');
	die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>


		<meta charset="UTF-8">
		<title>Admin</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/f/css/fontawesome.css" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>
    <section>
	<a href="home.php" class="button go-back-btn">Go back</a>
	</section>
<section id="three" class="wrapper style3  style44 special">
<div class="container 50%">
<h2>Add main</h2>
					
                    <div class="container 50%">
                                <form enctype="multipart/form-data"  action="add_main1.php" method="post" name="form1">
                                    <div class="row uniform">
                                    
                                    <div class="12u$">
                                        <input name="m_title" id="email" style="float: right" value="" placeholder="Title of main" type="text">
                                        </div>
                                        </div>
                                        <br>
                                        
                                        <div class="12u$">
                                            <textarea name="m_description"  id="message" placeholder="Description of main" rows="6"></textarea></br>
                                           
                                            
                                        </div>
                                        <div class="12u$">
                                           
                                            <input name="m_pic" id="email" style="float: right" value="" placeholder="Photo name" type="text">
                                            
                                        </div>
        
                                        <div class="12u$">
                                            <ul class="actions">
                                                <br>
                                                <li><input value="Add" name="shto" class="special big" type="submit"></li>
                                            </ul>
                                        </div>
                                        </form>
                                    </div>
                                    </div>
                                    </div>
                                        
                                    </div>
                                    </div>
                                    
                
                            <br>
                            <br>
                            <br>
                            <br>
                           

</body>
</html>
            