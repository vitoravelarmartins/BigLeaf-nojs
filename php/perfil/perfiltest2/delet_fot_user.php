<?php
session_start();

include_once("conexao.php");

$id_delet_pic=$_SESSION['id'];
$foto_padrão='0.png';

$query = "UPDATE perfils SET foto_url='' WHERE usuario_id='$id_delet_pic'";




if(!mysqli_query($conn,$query))
{
    echo($query."<br>");
    die("falha na comunicaçao".mysqli_connect_error());
}else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/bigleaf_nodejs/php/perfil/perfiltest2/index.php'>
    <script type=\"text/javascript\">
        alert(\"Imagem Deletada com Sucesso.\");
    </script>
";
$_SESSION['foto_url']=$foto_padrão;
}
