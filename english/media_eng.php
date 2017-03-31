<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="home-bg">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../mobile.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Media album</title>
</head>
<body>
<div class = "website">

    <?php
    include "header.php";
    ?>

    <?php
    include "navbar.php";
    ?>

    <div class = "container">
        <div class = "blok_boven"><h1>Media</h1>
        </div>

        <div class = "blok_onder">
			<?php
			foreach (array_reverse(glob("../images/uploads/*")) as $file) {
				echo "<div class='media_photo'>
                           <a href='$file'><img class='photoMedia' alt='$file' src='$file'></a>
                      </div>";
			}
			?>
        </div>

    </div>


    <?php
    include "footer.php";
    ?>
</div>
</body>
</html>
