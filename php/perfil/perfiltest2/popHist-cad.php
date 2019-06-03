<?php

session_start();

include_once("conexao.php");

$historico_medico = $_POST["hist"];
$id_hist=$_SESSION['id'];


$query = "UPDATE perfils SET historico_medico='$historico_medico' WHERE usuario_id='$id_hist'";





if(!mysqli_query($conn,$query))
{
    echo($query."<br>");
    die("falha na comunicaçao".mysqli_connect_error());
}else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/bigleaf_nodejs/php/perfil/perfiltest2/index.php'>
    <script type=\"text/javascript\">
        
    </script>
";
$_SESSION['historico_medico']=$historico_medico;
}

?>