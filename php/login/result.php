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
$id_db = $array_db['id'];
$hash_senha_db1 = $array_db['senha_hash'];


if (crypt($senha, $hash_senha_db1) === $hash_senha_db1) {

    if (mysqli_num_rows($result) > 0) {
        echo ('<br>' . 'sim é maior' . '<br>');
        
        echo(print_r($array_db));
        
        echo ("<br>" . $hash_senha_db1 . "</br>");
        echo("menino Bom"."<br>");
        
        //QUERY PERFIL
        $query_perfil = "SELECT * FROM perfils where usuario_id ='$id_db'";
        $result_perfil = mysqli_query($conn, $query_perfil);
        $array_db_perfil =  mysqli_fetch_array($result_perfil);
        echo(print_r($array_db_perfil));
        $_SESSION['id'] = $id_db;
        $_SESSION['nome'] = $array_db_perfil['nome'];
        $_SESSION['cpf'] = $array_db_perfil['cpf'];
        $_SESSION['data_nascimento'] = $array_db_perfil['data_nascimento'];
        $_SESSION['genero'] = $array_db_perfil['genero'];
        $_SESSION['telefone'] = $array_db_perfil['telefone'];
        $_SESSION['foto_url'] = $array_db_perfil['foto_url'];
        $_SESSION['tipo_sanguineo'] = $array_db_perfil['tipo_sanguineo'];
        $_SESSION['alergias'] = $array_db_perfil['alergias'];
        $_SESSION['historico_medico'] = $array_db_perfil['historico_medico'];
        // FINAL QUERY PERFIL

        //QUERY RECEITAS

        $query_receita = "SELECT * FROM receitas where usuario_id ='$id_db'";
        $result_receita = mysqli_query($conn, $query_receita);
        $array_db_receita =  mysqli_fetch_array($result_receita);
        echo(print_r($array_db_receita));
        $_SESSION['dara_receitas'] = $array_db_receita['data'];

        //FINAL QUERY RECIETAS





        header('location:http://localhost/bigleaf_nodejs/php/perfil/perfiltest2/index.php');

    } else {
        $_SESSION['erro'] = 'Usuario ou Senha Inválida';
        header('location:index.php');
        
      
    }
}else {
    $_SESSION['erro'] = 'Usuario ou Senha Inválida';
    header('location:index.php');
}
    
