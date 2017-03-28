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

            <div class = "header">
                <div class="header_content">

                    <div class="header_img">
                        <img src="images/header.png" alt="logo-header.png">

                    </div>
                    <div class="top_opleiding">
                        <img src="images/topopleiding.png" alt="topopleiding.png">

                    </div>
                    <div><p class="header_title">BU Instituut</p></div>
                    <div><p class="subheader">Voor Sport en Muziek</p></div>

                </div>
            </div>

            <div class = "navbar">
                <ul>
                    <li>
                        <a href="index.php" target="_self">Home</a>
                    </li>
                    <li>
                        <a href="Opleidingen.php" target="_self">Opleidingen</a>
                    </li>
                    <li>
                        <a href="media.php" target="_self">Media</a>
                    </li>
                    <li>
                        <a href="contact.php" target="_self">Contact</a>
                    </li>
                    <li>

                        <a href="login_pagina.php" target="_self">login</a>
                    </li>
                    <li>
                        <a href="index.php" target="_self">English</a>
                    </li>
                </ul>
            </div>

            <div class = "container">
                <div class = "blok_boven"><h1>Contact</h1>
                </div>
                
                <div class = "blok_onder">
                    <?php
                    include 'phpsend.php';
                    ?>

                </div>f

            </div>


            <div class = "footer">
                <div class ="footer_content">

                    <div class ="social_blok">
                        <a href="https://www.facebook.com/">
                            <div class ="social_plaatje">
                                <img src="images/facebook.png" alt="logo-header.png">
                            </div>

                        </a>
                    </div>
                    <div class ="social_blok">
                        <a href="https://www.twitter.com">
                        <div class ="social_plaatje">
                            <img src="images/twitter.png" alt="logo-header.png">
                            </a>
                        </div>

                    </div>
                    <div class ="social_blok">
                        <a href="contact.php" target="_self">
                        <div class ="social_plaatje">
                            <img src="images/mail.png" alt="logo-header.png">
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
