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

        echo (print_r($array_db));

        echo ("<br>" . $hash_senha_db1 . "</br>");
        echo ("menino Bom" . "<br>");

        //QUERY PERFIL
        $query_perfil = "SELECT * FROM perfils where usuario_id ='$id_db'";
        $result_perfil = mysqli_query($conn, $query_perfil);
        $array_db_perfil =  mysqli_fetch_array($result_perfil);
        echo (print_r($array_db_perfil));
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
        echo (print_r($array_db_receita));
        $_SESSION['data_receitas'] = $array_db_receita['data'];
        $_SESSION['descricao'] = $array_db_receita['descricao'];
        $_SESSION['arquivo_url_receita'] = $array_db_receita['arquivo_url'];



        $id_query = $_SESSION['id'];
        $query_pega_receita = "SELECT * FROM receitas where usuario_id='$id_query'";

        $result_tr_receita = mysqli_query($conn, $query_pega_receita);
        $array_tb_receita =  mysqli_fetch_all($result_tr_receita);
        $cont = count($array_tb_receita);
        // $i = 1;
        // $descricao_db = $array_tb_receita[$i][3];
        $_SESSION['array_receitas'] = $array_tb_receita;
        $_SESSION['cont'] = $cont;
        //FINAL QUERY RECEITAS

        //QUERY EXAMES
        $query_exame = "SELECT * FROM exames where usuario_id ='$id_db'";
        $result_exame = mysqli_query($conn, $query_exame);
        $array_db_exame =  mysqli_fetch_array($result_exame);
        echo (print_r($array_db_exame));
        $_SESSION['data_exames'] = $array_db_exame['data'];
        $_SESSION['descricao'] = $array_db_exame['descricao'];
        $_SESSION['arquivo_url_exame'] = $array_db_exame['arquivo_url'];



        $id_query = $_SESSION['id'];
        $query_pega_exame = "SELECT * FROM exames where usuario_id='$id_query'";

        $result_tr_exame = mysqli_query($conn, $query_pega_exame);
        $array_tb_exame =  mysqli_fetch_all($result_tr_exame);
        $cont_exame = count($array_tb_exame);
        // $i = 1;
        // $descricao_db = $array_tb_exame[$i][3];
        $_SESSION['array_exames'] = $array_tb_exame;
        $_SESSION['cont_exame'] = $cont_exame;
        //FINAL QUERY EXAMES








        header('location:http://localhost/bigleaf_nodejs/php/perfil/perfiltest2/index.php');
    } else {
        $_SESSION['erro'] = 'Usuario ou Senha Inválida';
        header('location:index.php');
    }
} else {
    $_SESSION['erro'] = 'Usuario ou Senha Inválida';
    header('location:index.php');
}
