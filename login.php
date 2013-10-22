<?php

$login = $_POST['nick'];
$heslo = $_POST['heslo'];

if($login == "admin" && $heslo == "admin") {
    session_start();
    $_SESSION['login'] = stripslashes($login);
    header("Location: seznamclanku.php");
    die();
} else {
    echo"Zadal jsi špatný login nebo heslo!";
}
?>