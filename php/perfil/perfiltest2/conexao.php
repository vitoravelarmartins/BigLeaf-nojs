<?php

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$bdnome = "bigleaf_nodejs";
$porta = "3307";

$conn = mysqli_connect($servidor, $usuario, $senha, $bdnome, $porta);

if (!$conn) {
    die("Falha na conexão " . mysqli_connect_erro());
} else {
    // echo ("Conectado no banco ");
}



?>
