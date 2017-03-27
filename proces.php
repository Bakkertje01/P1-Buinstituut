<?php

// USID= admin, W8W= p@ssw0rd 
if (isset($_POST['username'], $_POST['password'])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'password') {
        echo "Welkom";
    } else {
        echo "Vul het juiste wachtwoord in";
    }
} 
else {
    echo "no input";
}
?>