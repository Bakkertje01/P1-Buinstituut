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
        <div class = "blok_boven"><h1>Upload</h1>
        </div>

        <div class = "blok_onder">
            <div class="uploadForm">
				<?php

				$target_dir = "../images/uploads/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
					if($check !== false) {
						echo "<p>File is an image - " . $check["mime"] . ".</p>";
						$uploadOk = 1;
					} else {
						echo "<p>File is not an image.</p>";
						$uploadOk = 0;
					}
				}
				// Check if file already exists
				if (file_exists($target_file)) {
					echo "<p>Sorry, file already exists.</p>";
					$uploadOk = 0;
				}
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 5000000) {
					echo "<p>Sorry, filesize to large.</p>";
					$uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					echo "<p>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
					$uploadOk = 0;
				}
				$fileCount = count (glob ('images/uploads/*'));
				$newName = $target_dir . '/' . ( $fileCount + 1) . '.' . $imageFileType;
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo "<p>Sorry, your file hasn't been uploaded.</p>";
					// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newName)) {
						echo "<p>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</p>";
					} else {
						echo "<p>Sorry, there was an error while uploading.</p>";
					}
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
