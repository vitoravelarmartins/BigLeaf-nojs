<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
</head>
</body>
<?php

session_start();

include_once("conexao.php");
$id_user = $_SESSION['id'];

$query = "SELECT id from receitas where usuario_id='$id_user' order by id desc limit 1";

$result_receita = mysqli_query($conn, $query);

$array_db =  mysqli_fetch_array($result_receita);
$id_db_receita = $array_db['id'];
// echo ($id_db_receita);

$id_futuro = $id_db_receita + 1;



//CARREGAR FOTOS

$arquivo = $_FILES['arquivo']['name'];

//Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'foto_receitas/';

//Tamanho máximo do arquivo em Bytes
$_UP['tamanho'] = 1024 * 1024 * 100; //5mb

//Array com a extensões permitidas
$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif', 'pdf');

//Renomeiar
$_UP['renomeia'] = true;

//Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
    // die("Não foi possivel fazer o upload, erro: <br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
    // exit; //Para a execução do script

    echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/bigleaf_nodejs/php/perfil/perfiltest2/index.php'>
					<script type=\"text/javascript\">
						alert(\"Não foi feito o upload do arquivo.\");
					</script>
				";
}

//Faz a verificação da extensao do arquivo
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
    echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/bigleaf_nodejs/php/perfil/perfiltest2/index.php'>
					<script type=\"text/javascript\">
						alert(\"A imagem não foi cadastrada extesão inválida.\");
					</script>
				";
}

//Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
    echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://http://localhost/bigleaf_nodejs/php/perfil/perfiltest2/index.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
}

//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
else {
    //Primeiro verifica se deve trocar o nome do arquivo
    if ($_UP['renomeia'] == true) {
        //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
        $nome_final = $_SESSION['id'] . '-' . $id_futuro . "." . $extensao;
    } else {
        //mantem o nome original do arquivo
        $nome_final = $_FILES['arquivo']['name'];
    }
    //Verificar se é possivel mover o arquivo para a pasta escolhida
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
        //Upload efetuado com sucesso, exibe a mensagem
        // $query = mysqli_query($conn, "INSERT INTO usuarios (
        // nome_imagem) VALUES('$nome_final')");


        // $data = mysqli_escape_string($conn, $_POST['data']);
        $descricao = mysqli_escape_string($conn, $_POST['descricao']);
        // $arquivo_url = mysqli_escape_string($conn, $_POST['arquivo_url']);
        $id_user_rec = $_SESSION['id'];

        // $data_Americano = DateTime::createFromFormat('d/m/Y', $data);
        // print_r($data_verdade = $data_Americano->format('Y-m-d'));




        $query = "INSERT INTO receitas (usuario_id, data, descricao, arquivo_url, created_at,updated_at) 
                    values ('$id_user_rec',now(),'$descricao','$nome_final',now(),now())";


        if (!mysqli_query($conn, $query)) {
            echo ($query . "<br>");
            die("falha na comunicaçao" . mysqli_connect_error());
        } else {
            // echo ("Deu Certo a Inserção!!!");

        }

        

        $id_query = $_SESSION['id'];
        $query = mysqli_query($conn, "update receitas set arquivo_url='$nome_final' where usuario_id='$id_futuro';");

        $_SESSION['arquivo_url_receita'] = $nome_final;

        $query_pega_receita = "SELECT * FROM receitas where usuario_id='$id_query'";

        $result_tr_receita = mysqli_query($conn, $query_pega_receita);
        $array_tb_receita =  mysqli_fetch_all($result_tr_receita);
        $cont = count($array_tb_receita);
        // $i = 1;
        // $descricao_db = $array_tb_receita[$i][3];
        $_SESSION['array_receitas'] =$array_tb_receita;
        $_SESSION['cont'] = $cont;


        // for($i = 0; $i < $cont;$i++) {
            
            
        //     $descricao_db = $array_tb_receita[$i][3];
        //     echo($descricao_db.'<br>');
            
        // }


        // echo (print_r($descricao_db));
        // echo($cont);

            echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/bigleaf_nodejs/php/perfil/perfiltest2/index.php'>
            <script type=\"text/javascript\">
                alert(\"Receita cadastrada com Sucesso.\");
            </script>
        ";


    } else {
        //Upload não efetuado com sucesso, exibe a mensagem
        // echo "
        // 	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
        // 	<script type=\"text/javascript\">
        // 		alert(\"Imagem não foi cadastrada com Sucesso.\");
        // 	</script>
        // ";

    }
}


?>

</body>

</html>