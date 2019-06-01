<?php

session_start();

include_once("conexao.php");

$tipo = $_POST["tipo"];
$id_sangue=$_SESSION['id'];


$query = "UPDATE perfils SET tipo_sanguineo='$tipo' WHERE usuario_id='$id_sangue'";





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
$_SESSION['tipo_sanguineo']=$tipo;
}

?>