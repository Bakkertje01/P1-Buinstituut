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
                <div class = "blok_onder">
                    <a href="https://www.accuweather.com/nl/nl/hoogeveen/247260/weather-forecast/247260" class="aw-widget-legal">
                        <!--
						By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
						-->
                    </a><div id="awcc1490706727331" class="aw-widget-current"  data-locationkey="247260" data-unit="c" data-language="nl" data-useip="false" data-uid="awcc1490706727331"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>

                </div>

            </div>

                <?php
                    include "footer.php";
                ?>
        </div>
    </body>
</html>
