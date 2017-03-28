<!doctype html>
<html>
    <head>
        <title>send&nbsp;form</title>
    </head>
    <body>
        <form action="/html-php-form-send-email.php" method="post" enctype="text/plain">
            Naam:<input type="text" name="naam" value="vul&nbsp;in">
            <br>
            achternaam:<input type="text" name="achternaam" value="vul&nbsp;in">
            <br>
            e-mail:<input type="text" name="e-mail" value="vul&nbsp;in">
            <input type="submit" name="submit">
            <input type="reset" name="reset">
            
            
            
            
        </form>>
        

        <?php

        if($_POST[submit]){
            $emailcontct="1234@hotmail.com"; //vul email die info moet ontvangen
            $naamsend=$_POST["naam"];
            $achternaamSend=$_POST["achternaam"];
            $emailSend=$_POST["e-mail"];
            $fullInfo="Name:$naamsend\nachternaam:$achternaamSend\nemail:$emailSend";
            mail($emailcontct,$naamSend,$fullInfo);
            
            
        }
            

        ?>





        
    </body>
</html>