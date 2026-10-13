<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$edad = $_POST["edad"];

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "El correo no es válido";
}

echo "El nombre es $nombre y el correo es $email";

?>