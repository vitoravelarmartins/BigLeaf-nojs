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

$cpf = $_POST["cpf"];
$data_nascimento = $_POST["data_nasc"];
$data_Americano = DateTime::createFromFormat('d/m/Y', $data_nascimento);
print_r($data_verdade = $data_Americano->format('Y-m-d'));





$query = "SELECT * FROM perfils where cpf ='$cpf' and data_nascimento like '$data_verdade%'";


$result = mysqli_query($conn, $query);

$array_db =  mysqli_fetch_array($result);
// $hash_senha_db1 = $array_db['senha_hash'];
$cpf_db = $array_db['cpf'];
$id_db = $array_db['usuario_id'];



if (mysqli_num_rows($result) > 0) {
    echo ('<br>' . 'sim é maior' . '<br>');
    echo (print_r($array_db));

    echo ("<br>" . $cpf_db . "</br>");
    echo ("menino Bom");
    $_SESSION['id'] = $id_db;
    header('location:nova-senha.php');

} else {
    $_SESSION['cpf-erro'] =$cpf;
    $_SESSION['data_nasc_erro']=$data_nascimento;
    $_SESSION['erro'] = 'Usuario ou Senha Inválida';
    header('location:index-alterar-senha.php');
    echo (print_r($array_db));
}
