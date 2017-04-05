<?php

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//	$emailCom = $_POST["comment"];//$texthier = $_POST["comment"];
//	$naamsend = $_POST["naam"];//$naamsend=$_POST["naam"]; //naam verzender
//	$achternaamSend = $_POST["achternaam"]; //achernaam verzender
//
//}
	$naamsend = $achternaamSend = $emailSend = $emailCom = "";
	$naamsendErr = $achternaamSendErr = $emailSendErr = $emailComErr = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["naam"])) {
			$naamsendErr = "Naam is verplicht";
		} else {
			$naamsend = test_input($_POST["naam"]);
		}

		if (empty($_POST["achternaam"])) {
			$achternaamSendErr = "Achternaam is verplicht";
		} else {
			$achternaamSend = test_input($_POST["achternaam"]);
		}

		if (empty($_POST["e-mail"])) {
			$emailSendErr = "E-mail is verplicht";
		} else {
			$emailSend = test_input($_POST["e-mail"]);
		}

		if (empty($_POST["comment"])) {
			$emailComErr = "Opmerking is verplicht";
		} else {
			$emailCom = test_input($_POST["comment"]);
		}
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>
<div class="contactinfo">

        <p>Hier kun je je contact informatie achterlaten of om vragen te stellen.
            Wij zullen proberen om zo snel mogelijk te antwoorden.</p>

</div>
<div class="Cform">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Naam:<br><input type="text" name="naam" placeholder="vul&nbsp;in&nbsp;voornaam" <?php if (isset($_POST['naam'])) echo 'value="'.$_POST['naam'].'"';?>>
		<span class="error">* <?php echo $naamsendErr;?></span>
        <br>
        Achternaam:<br><input type="text" name="achternaam" placeholder="vul&nbsp;in&nbsp;achternaam" <?php if (isset($_POST['achternaam'])) echo 'value="'.$_POST['achternaam'].'"';?>>
		<span class="error">* <?php echo $achternaamSendErr;?></span>
        <br>
        e-mail:<br><input type="email" name="e-mail" placeholder="vul&nbsp;in&nbsp;email" <?php if (isset($_POST['e-mail'])) echo 'value="'.$_POST['e-mail'].'"';?>>
		<span class="error">* <?php echo $emailSendErr;?></span>
        <br>
        Opmerking:<br><textarea title="comment" id="comment" name="comment" rows=4 cols=8><?php if (isset($_POST['comment'])) echo $_POST['comment'];?></textarea>
		<span class="error">* <?php echo $emailComErr;?></span>
        <br>
        <br>
        <br>
        <br>
        <input type="submit" value="Verzenden" name="submit">
        <input type="reset" value="Resetten" name="reset">
    </form>
    <p>Velden met een * zijn verplicht!</p>

	<?php


		if (isset($_POST["submit"])) {
			if (empty($naamsendErr || $achternaamSendErr || $emailSendErr || $emailComErr)) {
				$Nfile = fopen("mail_info.txt", "a+");
//			$naamsend = $_POST["naam"]; //naam verzender
//			$achternaamSend = $_POST["achternaam"]; //achernaam verzender
//			$emailSend = $_POST["e-mail"];  //email verzender
//			$emailCom = $_POST["comment"];
				$fullInfo = "Name:" . " " . $naamsend . " " . "achternaam:" . " " . $achternaamSend . " " . "mail:" . " " . $emailSend . " " . "comments:" . " " . $emailCom . "" . PHP_EOL; //stelt email op met info
				fwrite($Nfile, $fullInfo);
				fclose($Nfile);
				//schrijft bestanden naar htdocs(de server)
				echo "<p>verzenden gelukt!</p>";

			}else{
				echo "<p>Alle velden invullen a.u.b.</p>";
			}
		}

	?>
</div>





