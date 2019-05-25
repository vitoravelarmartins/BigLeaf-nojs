<?PHP
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta http-equiv="Content-Language" content="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Cadastro</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780"> 
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 style="text-align:center" class="title">Alteração de Senha</h2>
                    <form method="POST">
                        <!-- <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Nome" name="name">
                        </div> -->
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="CPF" name="CPF">
                           </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Data De Nacimento" name="birthday">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        <!-- <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">Género</option>
                                    <option>Masculino</option>
                                    <option>Feminino</option>
                                    <option>Não Informar</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div> -->
                        <!-- <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="E-mail" name="email">
                        </div> -->
                        <!-- <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Telefone" name="phone">
                        </div> -->
                         <!-- <div class="input-group">
                         <input class="input--style-3" type="password" placeholder="Nova Senha" name="Senha">
                        </div> -->
                    
                    <!-- <div class="input-group">
                     <input class="input--style-3" type="password" placeholder="Repita Sua Senha" name="Senha">
                    </div>           -->
                        <div class="p-t-10" style="text-align:center">
                            <button class="btn btn--pill btn--green" type="submit">Verificar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
