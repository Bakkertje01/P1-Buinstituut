<?php
$username = "admin";
$password = "password"; 
?>

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
					<?php
					if (isset($_POST['username'], $_POST['password'])) {
						if ($_POST['username'] == $username && $_POST['password'] == $password) {
							?>
                            <form action="uploadtest.php" method="post" enctype="multipart/form-data">
                                Select image to upload:
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <input type="submit" value="Upload Image" name="submit">
                            </form>;
                    <?php
						} else {
							echo "Vul het juiste wachtwoord of gebruikersnaam in";
						}
					} else {
						echo "geen input";
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
