<?php
session_start();
?>

<!DOCTYPE html>

<head>
    <title>BigLeaf</title>
    <html lang="pt-br">
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/main.js"></script>
</head>

<body style="background: rgba(0, 0, 0);">

    <form method="POST" action="popAlergia-cad.php"  class="">
        <br>
        <input type="text" placeholder="Digite substancia Alergica" class="alter_butt_4" name="alergia">
        <input type="submit" class="col-sm-7 alter_butt_2" value="Cadastrar">
    </form>
    <form method="POST" action="delet_fot_user.php">
        <input type="submit" class="col-sm-5 alter_butt_3" value="Deletar"><br>
    </form>

</body>