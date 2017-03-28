<!doctype html>
<html>
    <head>
        <title>send&nbsp;form</title>
    </head>
    <body>
	<?php
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $emailCom=$_POST["comment"];//$texthier = $_POST["comment"];
            $naamsend=$_POST["naam"];//$naamsend=$_POST["naam"]; //naam verzender
            $achternaamSend=$_POST["achternaam"]; //achernaam verzender
            
        }
		?>
       
	    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Naam:<input type="text" name="naam" value="vul&nbsp;in&nbsp;naam">
            <br>
            achternaam:<input type="text" name="achternaam" value="vul&nbsp;in&nbsp;achternaam">
            <br>
            e-mail:<input type="text" name="e-mail" value="vul&nbsp;in&nbsp;email">
            comment<input type="text" name="comment" value="vul&nbsp;in&nbsp;comment">
            <input type="submit" name="submit">
            <input type="reset" name="reset">
            
            
            
            
        </form>

        <?php
        if(isset($_POST["submit"])){
            $emailcontct="o350268@mvrht.com"; //vul email die info moet ontvangen
            $naamsend=$_POST["naam"]; //naam verzender
            //$achternaamSend=$_POST["achternaam"]; //achernaam verzender
            $emailSend=$_POST["e-mail"];  //email verzender
            $emailCom=$_POST["comment"];
            $fullInfo="Name:$naamsend&nbsp;achternaam:$achternaamSend&nbsp;mail:$emailSend&nbsp;$emailCom"; //stelt email op met info
            mail($emailcontct,$naamSend,$fullInfo); //verstuurd info
            header("Location:http://www.bbc.com/news/world-latin-america-39413074");
            
			
            echo $achternaamSend;
            echo "is verstuurd";
        }
            
        
        
        
    
        ?>





        
    </body>
</html>