<!doctype html>
<html>
    <head>
        <title>send&nbsp;form</title>
    </head>
    <body>
       

        <?php

        if($_POST[submit]){
            $emailcontct="n2470407@mvrht.com"; //vul email die info moet ontvangen
            $naamsend=$_POST["naam"];
            $achternaamSend=$_POST["achternaam"];
            $emailSend=$_POST["e-mail"];
            $fullInfo="Name:$naamsend\nachternaam:$achternaamSend\nemail:$emailSend";
            mail($emailcontct,$naamSend,$fullInfo);
            
            
        }
            

        ?>





        
    </body>
</html>
