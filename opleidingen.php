<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="home-bg">
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
                <div class = "blok_boven"><h1>Opleidingen</h1>
                </div>
                <a href = "sportpage.php"><div class = "blok_boven_sport"><h1>Sport</h1>
                </div></a>
                <a href = "musicpage.php"><div class = "blok_boven_muziek"><h1>Muziek</h1>
                </div></a>
                <div class = "blok_onder_opleidingen"><p>Het BU instituut is een ambitieuze hogeschool in een dynamische omgeving.</p>
                    <p> Als University of Applied Sciences verzorgen we onderwijs en verrichten we onderzoek.</p>
                    <p> We leiden aankomende professionals op die gewild zijn op de arbeidsmarkt en zijn verbonden met de regio Drenthe.</p>
                    <p> De verbinding tussen onderwijs, onderzoek en de beroepspraktijk versterkt onze impact in de regio.</p>
                </div>


            </div>


            <?php
            include "footer.php";
            ?>

        </div>
    </body>
</html>
