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
        <title>Media login</title>
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
                <div class = "blok_boven"><h1>Login page</h1>
                </div>

                <div class = "blok_onder">
                    <div class="loginPrompt">
                        <form action="image_upload_eng.php" method="POST">
                            <p><label for="username">Username: </label><input type="text" id="username" name="username"/></p>
                            <p><label for="password">password: </label><input type="password" id="password" name="password"/></p>
                            <p><input type="submit" value="Log in"/></p>
                        </form>

                    </div>
                </div>
            </div>


            <?php
            include "footer.php";
            ?>

        </div>
    </body>
</html>
