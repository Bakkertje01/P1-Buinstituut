<!doctype html >
<html>
<head>
    <title>navbar</title>
</head>
<body>
<div class = "navbar">
    <ul class = "header_ul">
        <li>
            <a href="index.php" target="_self">Home</a>
        </li>
        <li>
            <a href="opleidingen.php" target="_self">Opleidingen</a>
        </li>
        <li>
            <a href="media.php" target="_self">Media</a>
        </li>
        <li>
            <a href="contact.php" target="_self">Contact</a>
        </li>
        <li>

            <a href="login_pagina.php" target="_self">Login</a>
        </li>
        <li>
            <a href="english/index_eng.php" target="_self">English</a>
        </li>

		<?php
			if(isset($_SERVER['HTTP_REFERER'])) {
				echo"<li>";
				$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
				echo "<a href='$url'>Back</a>";
				echo "</li>";
			}
		?>
    </ul>

</div>
</body>
</html>