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
    <title>Contact</title>
</head>
<body>
<div class = "website">

    <?php
    include "header_eng.php";
    ?>

    <?php
    include "navbar_eng.php";
    ?>

    <div class = "container">
        <div class = "blok_boven"><h1>Contact</h1>
        </div>

        <div class = "blok_onder">
            <?php
            include 'BestSendForm_eng.php';
            ?>

            <div class="adres">
                <div class="adres_gegevens">
                    BU University<br>
                    Het Lage Holt 21<br>
                    7909 BL Hoogeveen<br>
                    0906767676<br>
                </div>
                <div class="kaartje">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2416.4108977353735!2d6.442632551850314!3d52.7247773797546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c8106df5222cf9%3A0x87fb9d1ca8ef6e58!2sHet+Lage+Holt+21%2C+7909+BL+Hoogeveen!5e0!3m2!1snl!2snl!4v1490880160082" width="400" height="310" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
                <!-- AIzaSyAvBwxiqCpdDtUt8AjzaRH3fJ8bGIIfWV0 -->


            </div>


        </div>


    </div>

    <?php
    include "footer_eng.php";
    ?>

</div>
</body>
</html>
