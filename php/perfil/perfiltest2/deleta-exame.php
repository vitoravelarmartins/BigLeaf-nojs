

<?php

session_start();

include_once("conexao.php");

// $alergia = $_POST["alergia"];
$id_file=$_POST['id_file'];
$id_query = $_SESSION['id'];


$query = "UPDATE exames SET usuario_id='0' WHERE arquivo_url='$id_file'";





if(!mysqli_query($conn,$query))
{
    echo($query."<br>");
    die("falha na comunicaçao".mysqli_connect_error());
}else{
    
    $query_pega_exame = "SELECT * FROM exames where usuario_id='$id_query'";

    $result_tr_exame = mysqli_query($conn, $query_pega_exame);
    $array_tb_exame =  mysqli_fetch_all($result_tr_exame);
    $cont_exame = count($array_tb_exame);
    
    $_SESSION['array_exames'] =$array_tb_exame;
    $_SESSION['cont_exame'] = $cont_exame;


    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/bigleaf_nodejs/php/perfil/perfiltest2/index.php'>
    <script type=\"text/javascript\">
        
    </script>
";
}

?>