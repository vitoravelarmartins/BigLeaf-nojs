<?php
session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$bdnome = "bigleaf_nodejs";
$porta = "3307";

$conn = mysqli_connect($servidor, $usuario, $senha, $bdnome, $porta);

if (!$conn) {
    die("Falha na conexão " . mysqli_connect_erro());
} else {
    echo ("Conectado no banco ");
}

$email = $_POST["email"];
$senha = $_POST["pass"];





// $query = "SELECT * FROM usuarios where email ='$email' and senha_hash='$senha'";

$query = "SELECT * FROM usuarios where email ='$email'";
// $querypass = "SELECT * FROM usuarios where senha_hash='$senha'";

$result = mysqli_query($conn, $query);

$array_db =  mysqli_fetch_array($result);
$hash_senha_db1 = $array_db['senha_hash'];


if (crypt($senha, $hash_senha_db1) === $hash_senha_db1) {

    if (mysqli_num_rows($result) > 0) {
        echo ('<br>' . 'sim é maior' . '<br>');
        
        echo(print_r($array_db));
        
        echo ("<br>" . $hash_senha_db1 . "</br>");
        echo("menino Bom");
        // header('location:1.php');

    } else {
        $_SESSION['erro'] = 'Usuario ou Senha Inválida';
        header('location:index.php');
        
      
    }
}else {
    $_SESSION['erro'] = 'Usuario ou Senha Inválida';
    header('location:index.php');
}
    
