<?php

$username = $_POST['username'];
$password = $_POST['password'];

// USID= admin, W8W= p@ssw0rd 
if ($username == 'admin' AND $password == 'password') {
    echo "Welkom";
} else {
    echo "Vul het juiste wachtwoord in";
}
?>