<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="mobile.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<meta name "viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
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
                <a href="sportpage.php"><div class = "blok_linksboven"><h1>Sport</h1>
                </div></a>
                <a href="musicpage.php"><div class = "blok_rechtsboven"><h1>Muziek</h1>
                </div></a>
                <div class = "blok_onder"><p>Lorem Ipsum......test</p>
                </div>

            </div>

            <?php
            include "footer.php";
            ?>
        </div>
    </body>
</html>
