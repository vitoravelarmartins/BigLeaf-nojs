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


$nova_senha = $_POST["nova_senha"];
$id_verificador = $_SESSION['id'];

$custo='08';
$salt = 'Cf1f11ePArKlBJomM0F6aJ';
$hash = crypt($nova_senha, '$2a$' . $custo . '$' . $salt . '$');

$query = "UPDATE usuarios set senha_hash='$hash' where id='$id_verificador'";

// and data_nascimento like '$data_nascimento%'";


if(!mysqli_query($conn,$query))
{
    echo($query."<br>");
    die("falha na comunicaçao".mysqli_connect_error());
}else{
    echo("Deu Certo a Inserção!!!");
    $_SESSION['senha_alterada'] = 'Senha alterada com Sucesso';
    header('location:../login/index.php');

}

?>
