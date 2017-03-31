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
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../mobile.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Media upload</title>
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
        <div class = "blok_boven">
            <h1>File upload</h1>
        </div>

        <div class = "blok_onder">
            <div class="uploadForm">
			<?php
			if (isset($_POST['username'], $_POST['password'])) {
				if ($_POST['username'] == $username && $_POST['password'] == $password) {
					?>
                    <form action="upload_eng.php" method="post" enctype="multipart/form-data">
                        <p><label for="fileToUpload">Select image:</label></p>
                        <p><input type="file" name="fileToUpload" id="fileToUpload"></p>
                        <p><input type="submit" value="Upload Image" name="submit"></p>
                    </form>
					<?php
				} else {
					echo "Fill in the correct username and password";
				}
			} else {
				echo "No input";
			}
			?>
        </div>
        </div>
    </div>


<?php
include "footer_eng.php";
?>

</div>
</body>
</html>
