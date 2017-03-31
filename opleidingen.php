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
                <div class = "blok_onder_opleidingen">
                    <p>De opleidingen van sport en muziek worden via een praktijkgerichte benadering aangeboden.
                    Werk jij graag aan je ontwikkeling door te doen, en niet door te lezen?
                    Dan zijn deze opleidingen een goede keuze voor jou.<br>
                    Als het jou iets lijkt om op onze hogeschool te komen studeren, meld je dan aan voor een meeloopdag, open dag of persoonlijk gesprek met één van de docenten.
                    </p>
                </div>


            </div>


            <?php
            include "footer.php";
            ?>

        </div>
    </body>
</html>
