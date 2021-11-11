<?php
    $destino= "jmanjarres@gmail.com";
    $name = $_POST["Name"];
    $mail = $_POST["Mail"];
    $Message = $_POST["Message"];
    $contenido = "Name: " .$name . "\nMail: " .$mail . "\nMessage: " . $message;
    mail($destino,$name, $contenido);
    header("Location:contact.html");
?>