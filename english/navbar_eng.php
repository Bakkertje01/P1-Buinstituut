<?php
/**
 * Created by PhpStorm.
 * User: Ernst-Jan Bakker
 * Date: 28-3-2017
 * Time: 12:45
 */
?>
<div class = "navbar">
    <ul class = "header_ul">
        <li>
            <a href="index_eng.php" target="_self">Home</a>
        </li>
        <li>
            <a href="opleidingen_eng.php" target="_self">Education</a>
        </li>
        <li>
            <a href="media_eng.php" target="_self">Media</a>
        </li>
        <li>
            <a href="contact_eng.php" target="_self">Contact</a>
        </li>
        <li>

            <a href="login_page_eng.php" target="_self">Login</a>
        </li>
        <li>
            <a href="../index.php" target="_self">Dutch</a>
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
