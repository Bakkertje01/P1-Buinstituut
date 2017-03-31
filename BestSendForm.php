<!doctype html>
<html>
<head>
    <title>send&nbsp;form</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$emailCom = $_POST["comment"];//$texthier = $_POST["comment"];
	$naamsend = $_POST["naam"];//$naamsend=$_POST["naam"]; //naam verzender
	$achternaamSend = $_POST["achternaam"]; //achernaam verzender

}
?>
<div class="contactinfo">
    <div class="contactinfoB">
        <p>Hier kun je je contact informatie achterlaten of om vragen te stellen.
            Wij zullen proberen om zo snel mogelijk te antwoorden.</p>
    </div>
</div>
<div class="Cform">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Naam:<br><input type="text" name="naam" placeholder="vul&nbsp;in&nbsp;naam">
        <br>
        Achternaam:<br><input type="text" name="achternaam" placeholder="vul&nbsp;in&nbsp;achternaam">
        <br>
        e-mail:<br><input type="email" name="e-mail" placeholder="vul&nbsp;in&nbsp;email">
        <br>
        Comment:<br><textarea title="comment" id="comment" name="comment" rows=4 cols=8></textarea>
        <br>
        <input type="submit" name="submit">
        <input type="reset" name="reset">
    </form>
</div>


<?php
$Nfile = fopen("mail_info.txt", "w");
if (isset($_POST["submit"])) {
	$Nfile = fopen("mail_info.txt", "wb");
	$naamsend = $_POST["naam"]; //naam verzender
	$achternaamSend = $_POST["achternaam"]; //achernaam verzender
	$emailSend = $_POST["e-mail"];  //email verzender
	$emailCom = $_POST["comment"];
	$fullInfo = "Name:" . " " . $naamsend . "" . "achternaam:" . " " . $achternaamSend . " " . "mail:" . " " . $emailSend . " " . "comments:" . " " . $emailCom; //stelt email op met info
	fwrite($Nfile, $fullInfo);
	fclose($Nfile);

	//schrijft bestanden naar htdocs(de server)
}
?>



</body>
</html>