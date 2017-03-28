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
        <div class = "blok_boven"><h1>Sportleraar</h1>
        </div>

        <div class = "blok_onder">
			<?php
			$target_dir = "images/uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 50000000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			$fileCount = count (glob ('images/uploads/*'));
			$newName = $target_dir . '/' . ( $fileCount + 1) . '.' . $imageFileType;
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newName)) {
					echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
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
