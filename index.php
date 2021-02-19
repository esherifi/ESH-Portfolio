<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESH-Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto:300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/57631137bb.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <header>
                <nav>
                    <?php 
                        $res = mysqli_query($conn, "SELECT * FROM menu WHERE menu_module = 'ModuliPerdoruesit' ORDER BY id_menu ASC LIMIT 3");
                        if(mysqli_num_rows($res) > 0 ){
                            while($row_res = mysqli_fetch_array($res)){
                                echo "<div class='navbutton'>
                                        <a href='".$row_res['menu_link']."'>".$row_res['menu_name'] ."</a>
                                    </div>";
                            }
                        }
                    ?>
                </nav>
            </header>
    
        <main>
            <?php
                $result = mysqli_query($conn, "SELECT * FROM main ORDER BY id_main DESC LIMIT 1");
                while($row=mysqli_fetch_array($result)){
                extract($row);
                if($result==null)
                mysqli_free_result($result);
                echo "<div class='herobox1'/>";
                echo "<h1>$m_title</h1>";
                echo "<p>$m_description</p>";
                echo "</div>";
                echo "<div class='herobox2'>";
                echo "<img src='images/$m_pic' alt=''/>";
                echo "</div>";
            } ?>
        </main>
    </div>

        <div class='container-two' id='skills'>
            <h2 class='section-title'>Skills</h2>
            <div class='cards'>
            <?php
                $sql = mysqli_query($conn,"SELECT * FROM containertwo WHERE layout='skills' ORDER BY id_contwo DESC LIMIT 3");//die(var_dump($sql));
                if(mysqli_num_rows($sql) > 0){
                    while($row_con = mysqli_fetch_array($sql)){
            ?>
                <div class='card1'>
                    <a href="#">
                        <img src='images/<?php echo $row_con['contwo_pic']; ?>' alt=''/>
                        <h2><?php echo $row_con['contwo_title']; ?></h2>
                        <p><?php echo $row_con['contwo_description']; ?></p>
                    </a>
                </div>
                <?php } } ?>
            </div>
        </div>
        
        <div class="container-two container-three" id="projects">
            <h2 class='section-title'>Projects</h2>
            <div class="cards">
                <?php
                    $sql = mysqli_query($conn,"SELECT * FROM containertwo WHERE layout='projects' ORDER BY id_contwo DESC LIMIT 2");//die(var_dump($sql));
                    if(mysqli_num_rows($sql) > 0){
                        while($row_con = mysqli_fetch_array($sql)){
                ?>
                <div class="card1 card-projects">
                    <a href="#">
                        <img class='card-images' src='images/<?php echo $row_con['contwo_pic']; ?>' alt=''/>
                        <h2><?php echo $row_con['contwo_title']; ?></h2>
                        <p><?php echo $row_con['contwo_description']; ?></p>
                    </a>
                </div>
                <?php } } ?>
            </div>
        </div>
</body>
</html>