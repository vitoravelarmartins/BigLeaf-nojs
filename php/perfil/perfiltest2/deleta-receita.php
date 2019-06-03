

<?php

session_start();

include_once("conexao.php");

// $alergia = $_POST["alergia"];
$id_file=$_POST['id_file'];
$id_query = $_SESSION['id'];


$query = "UPDATE receitas SET usuario_id='0' WHERE arquivo_url='$id_file'";





if(!mysqli_query($conn,$query))
{
    echo($query."<br>");
    die("falha na comunicaçao".mysqli_connect_error());
}else{
    
    $query_pega_receita = "SELECT * FROM receitas where usuario_id='$id_query'";

    $result_tr_receita = mysqli_query($conn, $query_pega_receita);
    $array_tb_receita =  mysqli_fetch_all($result_tr_receita);
    $cont = count($array_tb_receita);
    
    $_SESSION['array_receitas'] =$array_tb_receita;
    $_SESSION['cont'] = $cont;


    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/bigleaf_nodejs/php/perfil/perfiltest2/index.php'>
    <script type=\"text/javascript\">
        
    </script>
";
}

?>