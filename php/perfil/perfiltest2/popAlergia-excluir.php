<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

?>



<?php

session_start();

include_once("conexao.php");

// $alergia = $_POST["alergia"];
$id_alergia=$_SESSION['id'];


$query = "UPDATE perfils SET alergias='' WHERE usuario_id='$id_alergia'";





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
$_SESSION['alergias']=$alergia;
}

?>