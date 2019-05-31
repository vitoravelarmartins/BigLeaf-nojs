<?php
session_start();
?>

<!DOCTYPE html>

<head>
    <title>BigLeaf</title>
    <html lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/main.js"></script>
</head>

<body class="container-fluid imagemBackPerfil">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3 ">
            <div class="col-sm-12 background-perfiliimagen fundoperfil"></br>

                <div class="btn-group dropright alter_butt ">
                    <button type="button " class=" dropdown-toggle dropdown-toggle-split alter_butt center-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alterar Imagem</button>

                    </button>
                    <div class="dropdown-menu dropright" style="background-color:transparent">
                        <form method="POST" action="proc_upload.php" enctype="multipart/form-data" class="alter_butt">
                            <input type="file" class="alter_butt">
                            <input type="submit" class="alter_butt_2" value="Cadastrar"><br>
                        </form>
                    </div>
                </div><br><br><br>


                <div class="text-center">
                    <br>

                    <a href="troca_imagen"><img src="https://cdn.discordapp.com/attachments/409105872716038147/575470359252566037/Capturar.PNG" class="avatar img-circle img-thumbnail" alt="avatar"></a>
                    <h2 style='color:darkred'><?php
                                                echo ($_SESSION['tipo_sanguineo']);
                                                ?></h2>
                    <div class="btn-group dropright alter_butt ">
                        <button type="button " class=" dropdown-toggle dropdown-toggle-split alter_butt center-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alterar tipo Sanguineo</button>

                        </button>
                        <div class="dropdown-menu dropright" style="background-color:transparent">
                            <form method="POST" action="proc_upload.php" enctype="multipart/form-data" class="alter_butt">

                                <input type="checkbox" class="alter_butt" value="nada"> AB+
                            </form>
                        </div>
                    </div>
                    <hr>




                </div>


                <div>
                    <h3 class="text-center perfil_esquerdo">Sobre</h3>
                </div>

                <ul class="list-group perfil_esquerdo">
                    <!-- <li class="list-group-item text-muted">Perfil <i class="fa fa-dashboard fa-1x"></i></li> -->
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Data de
                                Nascimeto</strong></span><?php
                                                            $data_banco = $_SESSION['data_nascimento'];
                                                            $data_Americano = DateTime::createFromFormat('Y-m-d 00:00:00', $data_banco);
                                                            print_r($data_verdade = $data_Americano->format('d/m/Y'));

                                                            ?> </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Telefone</strong></span>
                        <?php
                        echo($_SESSION['telefone']);                        
                         ?></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Genero</strong></span><?php echo ($_SESSION['genero']) ?></li>
                </ul>
                <div class="row">
                    <br>
                </div>
                <div>
                    <h3 class="text-center perfil_esquerdo">Alergias</h3>
                </div>
                <ul class="list-group perfil_esquerdo">
                    <!-- <li class="list-group-item text-muted">Perfil <i class="fa fa-dashboard fa-1x"></i></li> -->
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Substancia</strong></span><?php
                                                                                                                        $nada = "";
                                                                                                                        if (strcmp($_SESSION['alergias'], $nada) == 0) {
                                                                                                                            echo ('Adcionar');
                                                                                                                        } else {
                                                                                                                            $_SESSION['alergias'];
                                                                                                                        }

                                                                                                                        ?></li>

                </ul>
                <div class="row">
                    <br>
                </div>
            </div>
            <!--/col12-->

        </div>
        <!--/col3-->
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-10">
                    <h1><?php echo ($_SESSION['nome']) ?></h1>
                </div>
                <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="https://cdn.discordapp.com/attachments/409105872716038147/575453242251804672/22.png"></a>

                    <button class="btn btn-danger pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Sair</button>>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-12 background-perfiliimagen fundoconteudo test3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Alergias</a></li>
                        <li><a data-toggle="tab" href="#messages">Receitas</a></li>
                        <li><a data-toggle="tab" href="#settings">Consultas</a></li>
                    </ul>


                    <div class="tab-content">
                        <div class="tab-pane active" id="home">

                            <form class="form" action="##" method="post" id="registrationForm">
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="first_name">
                                            <h4>Tipo de A</h4>
                                        </label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="last_name">
                                            <h4>Sobrenome</h4>
                                        </label>
                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="phone">
                                            <h4>telefone</h4>
                                        </label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="Telefone.">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mobile">
                                            <h4>Celular</h4>
                                        </label>
                                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="Celular.">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email">
                                            <h4>Email</h4>
                                        </label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="email.">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email">
                                            <h4>cidade</h4>
                                        </label>
                                        <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="password">
                                            <h4>Password</h4>
                                        </label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="password2">
                                            <h4>Verify</h4>
                                        </label>
                                        <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Salvar</button>
                                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> limpar</button>
                                    </div>
                                </div>
                            </form>



                        </div>
                        <!--/tab-pane-->
                        <div class="tab-pane" id="messages">

                            <h2></h2>


                            <form class="form" action="##" method="post" id="registrationForm">
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="first_name">
                                            <h4>Data</h4>
                                        </label>
                                        <input type="date" class="form-control" name="date1" id="date" placeholder="" title="enter your .">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="last_name">
                                            <h4>Descrição</h4>
                                        </label>
                                        <input type="text" class="form-control" name="Descrição1" id="text" placeholder="......." title="enter your .">
                                    </div>
                                </div>
                            </form>



                            <div class="form-group">



                                <div class="col-xs-6">
                                    <label for="last_name">
                                        <h4>Data</h4>
                                    </label>
                                    <br>
                                    <label>aaaaaaaaaaaaaaaaaaaaaa</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile">
                                        <h4>Descrição</h4>
                                    </label>
                                    <br>
                                    <label>aaaaaaaaaaaaaaaaaaaaaa</label>

                                </div>
                            </div>
                            <button type="button" class="alter_butt center-block">Vizualizar imagem</button>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Data</h4>
                                    </label>
                                    <br>
                                    <label>aaaaaaaaaaaaaaaaaaaaaaaa</label>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Descrição</h4>
                                    </label>
                                    <br>
                                    <label>aaaaaaaaaaaaaaaaaaaaaaaa</label>
                                </div>
                            </div>
                            <button type="button" class="alter_butt center-block">Vizualizar imagem</button>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password">
                                        <h4>Data</h4>
                                    </label>
                                    <br>
                                    <label>aaaaaaaaaaaaaaaaaaaaaaaa</label>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2">
                                        <h4>Descrição</h4>
                                    </label>
                                    <br>
                                    <label>aaaaaaaaaaaaaaaaaaaaaaaa</label>
                                </div>
                            </div>
                            <button type="button" class="alter_butt center-block">Vizualizar imagem</button>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Salvar</button>
                                    <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> salvar</button>>
                                </div>
                            </div>
                            </form>

                        </div>
                        <!--/tab--->
                        <div class="tab-pane" id="settings">



                            <form class="form" action="##" method="post" id="registrationForm">
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="first_name">
                                            <h4>Data</h4>
                                        </label>
                                        <input type="date" class="form-control" name="data1" id="date" placeholder="Consulta1" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="last_name">
                                            <h4>Horario</h4>
                                        </label>
                                        <input type="time" class="form-control" name="horario1" id="appt" placeholder="Horario De Atendimento" title="enter your last name if any.">
                                    </div>
                                </div>

                            </form>

                            <div class="form-group">
                                <div class="col-xs-6 background1">
                                    <label for="phone">
                                        <h4>Data</h4>
                                    </label>
                                    <br>
                                    <label>aaaaaaaaaaaaaaaaaaaaaaaa</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile">
                                        <h4>Horario</h4>
                                    </label>
                                    <br>
                                    <label>aaaaaaaaaaaaaaaaaaaaaaaa</label>
                                </div>
                                <button type="button" class="alter_butt center-block">Vizualizar imagem</button>
                                <div class="form-group">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Data</h4>
                                    </label>
                                    <br>
                                    <label>aaaaaaaaaaaaaaaaaaaaaaaa</label>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Horario</h4>
                                    </label>
                                    <br>
                                    <label>aaaaaaaaaaaaaaaaaaaaaaaa</label>
                                </div>
                            </div>
                            <button type="button" class="alter_butt center-block">Vizualizar imagem</button>
                            <div class="form-group">
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password">
                                        <h4>Data</h4>
                                    </label>
                                    <br>
                                    <label>aaaaaaaaaaaaaaaaaaaaaaaa</label>

                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2">
                                        <h4>Horario</h4>
                                    </label>
                                    <br>
                                    <label>aaaaaaaaaaaaaaaaaaaaaaaa</label>
                                </div>
                            </div>
                            <button type="button" class="alter_butt center-block">Vizualizar imagem</button>
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> salvar</button>>

                                    <button class="btn btn-lg btn-success pull-left" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> salvar</button>>
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                    <!--/tab-->
                </div>
                <!--/tab-->
            </div>
            <!--/row-->
        </div>
        <div class="col-sm-1"></div>
    </div>
    <!--/-9-->
</body>