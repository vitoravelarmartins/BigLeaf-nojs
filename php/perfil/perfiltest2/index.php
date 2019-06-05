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
    <script language="JavaScript">
        function MM_openBrWindow(theUrl, winName, features) {
            window.open(theUrl, winName, features);
        }
    </script>
</head>

<body class="container-fluid imagemBackPerfil">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3 ">
            <div class="col-sm-12 background-perfiliimagen fundoperfil">

                <div class="btn-group dropright alter_butt ">
                    <button type="button " class=" dropdown-toggle dropdown-toggle-split alter_butt center-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alterar Imagem</button>

                    </button>
                    <div class="dropdown-menu dropright" style="background-color:transparent">
                        <form method="POST" action="proc_upload.php" enctype="multipart/form-data" class="alter_butt">
                            <input type="file" class="alter_butt" name="arquivo">
                            <input type="submit" class="col-sm-7 alter_butt_2" value="Cadastrar">
                        </form>
                        <form method="POST" action="delet_fot_user.php">
                            <input type="submit" class="col-sm-5 alter_butt_3" value="Deletar"><br>
                        </form>

                    </div>
                </div><br><br><br>


                <div class="text-center">
                    <br>

                    <img src=<?php
                                $nada = "";
                                if (strcmp($_SESSION['foto_url'], $nada) == 0) {
                                    echo ('foto_user/0.png');
                                } else {
                                    echo ('foto_user/' . $_SESSION['foto_url']);
                                }

                                ?> class="avatar img-circle img-thumbnail pximg" alt="avatar" style="width:170px; height:168px;"><br>
                    <h2 style='color:darkred'><?php
                                                $nada = "";
                                                if (strcmp($_SESSION['tipo_sanguineo'], $nada) == 0) {
                                                    echo ('--');
                                                } else {
                                                    echo ($_SESSION['tipo_sanguineo']);
                                                }

                                                ?></h2>
                    <div>

                        <form method="post" action="Tipo_Sanguineo.php">
                            <div class="form-group">
                                <select class="alter_butt center-block" id="exampleFormControlSelect1" name="tipo">
                                    <option disabled selected>Alterar tipo Sanguineo</option>
                                    <option class="option-style">O-</option>
                                    <option class="option-style">O+</option>
                                    <option class="option-style">A-</option>
                                    <option class="option-style">A+</option>
                                    <option class="option-style">B-</option>
                                    <option class="option-style">B+</option>
                                    <option class="option-style">AB-</option>
                                    <option class="option-style">AB+</option>
                                </select>
                                <input type="submit" class="col-sm-5 alter_butt_2" value="Alterar"><br>
                            </div>

                        </form>





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
                        echo ($_SESSION['telefone']);
                        ?></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Genero</strong></span><?php echo ($_SESSION['genero']) ?></li>
                    
                </ul>
                <div class="row">
                    <br>
                </div>
                
                <div>
                    <h3 class="text-center perfil_esquerdo">Informações</h3>
                </div>
                <div class="perfil_esquerdo_2">
                    <label class="">Alergias</label>
                </div>

                <ul class="list-group perfil_esquerdo">


                    <li class="list-group-item text-right"><span class="pull-left"><strong>Substancia:</strong></span>


                        <?php

                        $nada = "";
                        if (strcmp($_SESSION['alergias'], $nada) == 0) {
                            echo ('<form method="post" action="popAlergia-cad.php">
                            <input class="row" type="text" placeholder="Subs.Alergica" name="alergia">
                            <br>
                            <input type="submit" class="alter_butt_5" value="Alterar"><br>
                            </form>');
                        } else {
                            echo ('<label>' . $_SESSION['alergias'] . '</label>' .
                                '<form method="post" action="popAlergia-excluir.php">
                            <input type="submit" class="alter_butt_5" value="Alterar"><br>
                            </form>');
                        }

                        ?></li>
                </ul>

                <div class="perfil_esquerdo_2">
                    <label class="">Medicamentos Controlados</label>
                </div>
                <ul class="list-group perfil_esquerdo">


                    <li class="list-group-item text-right"><span class="pull-left"><strong>Medicamento<br>
                                Controlado:</strong></span>
                        <form method="post" action="popAlergia-cad.php"></form>

                        <?php

                        $nada = "";
                        if (strcmp($_SESSION['historico_medico'], $nada) == 0) {
                            echo ('<form method="post" action="popHist-cad.php">
                            <input class="col-sm-7" type="text" placeholder="Subs.Alergica" name="hist">
                            <br>
                            <input type="submit" class="alter_butt_5" value="Alterar"><br>
                            </form>');
                        } else {
                            echo ('<label>' . $_SESSION['historico_medico'] . '</label>' .
                                '<form method="post" action="popHist-excluir.php">
                            <input type="submit" class="alter_butt_5" value="Alterar"><br>
                            </form>');
                        }

                        ?>
                    </li>
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
                    <h1 class="titul-name"><?php echo ($_SESSION['nome']) ?></h1>
                </div>

                <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="https://cdn.discordapp.com/attachments/409105872716038147/575453242251804672/22.png"></a>


                    <a href="http://localhost/bigleaf_nodejs/php/login/"><button class="btn btn-danger pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Sair</button></a>

                </div>


            </div>
            <div class="row">
                <div class="col-sm-12 background-perfiliimagen fundoconteudo test3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                        <li><a data-toggle="tab" href="#messages">Receitas</a></li>
                        <li><a data-toggle="tab" href="#settings">Exames</a></li>
                        <li><a style="font-weight: bold;" href="javascript:void(0)" onClick="MM_openBrWindow('http://localhost:3000/chat','','scrollbars=no, width=800, height=370, left=0, top=0')"><input type="submit" class="alter_butt_6" value="CHAT"></a></li>
                    </ul>


                    <div class="tab-content">
                        <div class="tab-pane active" id="home">

                            <form class="form" action="##" method="post" id="registrationForm">
                                <div class="form-group">

                                    <div class="col-xs-12">
                                        <iframe width="720" height="345" src="https://www.youtube.com/embed/_GLNDoYxG0E"></iframe>

                                    </div>
                                </div>

                            </form>




                        </div>

                        <!--/tab-pane-->
                        <!-- <receitas> -->
                        <div class="tab-pane" id="messages">

                            <h2></h2>


                            <form class="form" action="receitas_cad.php" method="post" id="registrationForm" enctype="multipart/form-data">
                                <div class="form-group">

                                    <div class="col-xs-12">
                                        <label for="last_name">
                                            <h4>Descrição</h4>
                                        </label>
                                        <!-- <input type="date" class="form-control" name="data" id="date" placeholder="" title="enter your ."><br> -->
                                        <input type="text" class="form-control" name="descricao" id="text" placeholder="Descrição" title="enter your ."><br>
                                        <input type="file" class="alter_butt" name='arquivo'><br>
                                        <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Salvar</button>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <br>
                                    <hr>

                                </div>
                            </form>



                            <div class="form-group">


                                <!-- RECEITA -->

                            </div>


                            <div class="form-group">
                                <div class="col-xs-3">
                                    <label for="email">
                                        <h4>DATA/HORA</h4><br>
                                        <h6><?php
                                            $descricao_db_exame = $array_tb_receita = $_SESSION['array_receitas'];
                                            $cont = $_SESSION['cont'];

                                            for ($i = 0; $i < $cont; $i++) {


                                                $descricao_db_exame = $array_tb_receita[$i][2];
                                                echo ($descricao_db_exame . '<hr>');
                                            }

                                            ?></h6>

                                    </label>
                                    <br>

                                </div>

                                <div class="col-xs-3">
                                    <label for="email">
                                        <h4>DESCRIÇÃO</h4><br>
                                        <h6><?php
                                            $descricao_db = $array_tb_receita = $_SESSION['array_receitas'];
                                            $cont = $_SESSION['cont'];

                                            for ($i = 0; $i < $cont; $i++) {


                                                $descricao_db = $array_tb_receita[$i][3];
                                                echo ($descricao_db . '<hr>');
                                            }

                                            ?></h6>

                                    </label>
                                    <br>

                                </div>


                                <div class="col-xs-3 ">
                                    <label for="email">
                                        <h4>RECEITA</h4><br>
                                        <h6><?php
                                            $descricao_db = $array_tb_receita = $_SESSION['array_receitas'];
                                            $cont = $_SESSION['cont'];

                                            for ($i = 0; $i < $cont; $i++) {

                                                $a = '<a style="font-weight: bold;" href="javascript:void(0)" onClick="MM_openBrWindow(';
                                                $b = "'foto_receitas/";
                                                $c = "','','scrollbars=no, width=500, height=270, left=0, top=0')";
                                                $d = '">Visualizar Receita</a>';



                                                $descricao_db = $array_tb_receita[$i][4];
                                                // echo ('<a href="foto_receitas/'.$descricao_db .'">'.'foto'.'</a>'.'<br>');
                                                echo ($a . $b . $descricao_db . $c . $d . '<hr>');
                                            }

                                            ?></h6>




                                    </label>
                                    <br>

                                </div>
                                <div class="col-xs-3 ">
                                    <label for="email">
                                        <h4 style="color:transparent">--</h4><br>
                                        <h6><?php
                                            $descricao_db = $array_tb_receita = $_SESSION['array_receitas'];
                                            $cont = $_SESSION['cont'];

                                            for ($i = 0; $i < $cont; $i++) {

                                                $a = '<form method="post" action="deleta-receita.php">';
                                                $b = '<input type="hidden" name="id_file" value="';
                                                $c = '"><input type="submit" class="alter_butt_3" value="Excluir Receita">';
                                                $d = '</form>';



                                                $descricao_db = $array_tb_receita[$i][4];
                                                // echo ('<a href="foto_receitas/'.$descricao_db .'">'.'foto'.'</a>'.'<br>');
                                                echo ($a . $b . $descricao_db . $c . $d . '<hr>');
                                            }

                                            ?></h6>




                                    </label>
                                    <br>

                                </div>
                                <!-- -----------------------------FINAL DE RECEITAS ----------------------------->

                            </div>




                            </form>

                        </div>
                        <!--EXAMES--->
                        <div class="tab-pane" id="settings">

                            <h2></h2>


                            <form class="form" action="exames_cad.php" method="post" id="registrationForm" enctype="multipart/form-data">
                                <div class="form-group">

                                    <div class="col-xs-12">
                                        <label for="last_name">
                                            <h4>Descrição</h4>
                                        </label>
                                        <!-- <input type="date" class="form-control" name="data" id="date" placeholder="" title="enter your ."><br> -->
                                        <input type="text" class="form-control" name="descricao" id="text" placeholder="Descrição" title="enter your ."><br>
                                        <input type="file" class="alter_butt" name='arquivo'><br>
                                        <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Salvar</button>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <br>
                                    <hr>

                                </div>
                            </form>



                            <div class="form-group">


                                <!-- EXAME -->

                            </div>


                            <div class="form-group">
                                <div class="col-xs-3">
                                    <label for="email">
                                        <h4>DATA/HORA</h4><br>
                                        <h6><?php
                                            $descricao_db_exame = $array_tb_exame = $_SESSION['array_exames'];
                                            $cont_exame = $_SESSION['cont_exame'];

                                            for ($i = 0; $i < $cont_exame; $i++) {


                                                $descricao_db_exame = $array_tb_exame[$i][2];
                                                echo ($descricao_db_exame . '<hr>');
                                            }

                                            ?></h6>

                                    </label>
                                    <br>

                                </div>

                                <div class="col-xs-3">
                                    <label for="email">
                                        <h4>DESCRIÇÃO</h4><br>
                                        <h6><?php
                                            $descricao_db_exame = $array_tb_exame = $_SESSION['array_exames'];
                                            $cont_exame = $_SESSION['cont_exame'];

                                            for ($i = 0; $i < $cont_exame; $i++) {


                                                $descricao_db_exame = $array_tb_exame[$i][3];
                                                echo ($descricao_db_exame . '<hr>');
                                            }

                                            ?></h6>

                                    </label>
                                    <br>

                                </div>


                                <div class="col-xs-3 ">
                                    <label for="email">
                                        <h4>EXAME</h4><br>
                                        <h6><?php
                                            $descricao_db_exame = $array_tb_exame = $_SESSION['array_exames'];
                                            $cont_exame = $_SESSION['cont_exame'];

                                            for ($i = 0; $i < $cont_exame; $i++) {

                                                $a = '<a style="font-weight: bold;" href="javascript:void(0)" onClick="MM_openBrWindow(';
                                                $b = "'foto_exames/";
                                                $c = "','','scrollbars=no, width=500, height=270, left=0, top=0')";
                                                $d = '">Visualizar Exame</a>';



                                                $descricao_db_exame = $array_tb_exame[$i][4];
                                                // echo ('<a href="foto_exames/'.$descricao_db_exame .'">'.'foto'.'</a>'.'<br>');
                                                echo ($a . $b . $descricao_db_exame . $c . $d . '<hr>');
                                            }

                                            ?></h6>



                                    </label>
                                    <br>

                                </div>
                                <div class="col-xs-3 ">
                                <label for="email">
                                        <h4 style="color:transparent">--</h4><br>
                                        <h6><?php
                                            $descricao_db_exame = $array_tb_exame = $_SESSION['array_exames'];
                                            $cont_exame = $_SESSION['cont_exame'];

                                            for ($i = 0; $i < $cont_exame; $i++) {

                                                $a = '<form method="post" action="deleta-exame.php">';
                                                $b = '<input type="hidden" name="id_file" value="';
                                                $c = '"><input type="submit" class="alter_butt_3" value="Excluir Exame">';
                                                $d = '</form>';



                                                $descricao_db_exame = $array_tb_exame[$i][4];
                                                // echo ('<a href="foto_exames/'.$descricao_db_exame .'">'.'foto'.'</a>'.'<br>');
                                                echo ($a . $b . $descricao_db_exame . $c . $d . '<hr>');
                                            }

                                            ?></h6>




                                    </label>
                                    <br>

                                </div>


                            </div>



                            </form>

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