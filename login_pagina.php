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
        <title></title>
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
                <div class = "blok_boven"><h1>Log in pagina</h1>
                </div>

                <div class = "blok_onder">
                    <form action="foto_upload.php" method="POST">
                        <p>username:   <input type="text" name="username"/></p>
                        <p>password:   <input type="password" name="password"/></p>
                        <p><input type="submit" value="Login"/></p>
                    </form>
                </div>
            </div>


            <?php
            include "footer.php";
            ?>

        </div>
    </body>
</html>
