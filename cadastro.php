<?php
session_start();
?>

<?php
if($_POST){

    $erro=[];
    foreach ($_POST as $key => $value) {
      if ($value == ""){
      $erro[] = "Campo $key em branco";
    }
  }

  // inicio do criptografando a senha e salvando-a somente depois de
  // confirmar se ela eh igual ao confirmar a senha
$senha = $_POST["senha"];
$confirmar = $_POST["confirma_senha"];

  if($confirmar !== $senha){
    $erro[] = "Senha e Confirmar Senha devem ser iguais";
  } else {
    $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);
    $_POST["senha"] = $senha_cripto;
    unset ($_POST["confirmar"]);
  }
// fim da criptografia e checagem 

  if(count($erro) === 0){
    // O formulario deve ser validado do lado do servidor.
    $arquivo="usuarios.json";

    if (file_exists($arquivo)) {
      $dados=file_get_contents($arquivo);
      $dados=json_decode($dados,true); // para array associativo // adicionei , true para tornar o array associativo// sem ele ele retorna um objeto.
      $formdados=$_POST;
      $nomeDoARquivo = $_FILES["fotoPerfil"]["name"];
      $caminhoDaFoto = "images/fotosUsuario/".$nomeDoARquivo;
      $guardaRetorno= move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"], $caminhoDaFoto);
      $formdados["caminhofoto"]=$caminhoDaFoto;
      $dados["usuarios"][]=$formdados;
      $dadosemjson=json_encode($dados); //json string
     file_put_contents($arquivo,$dadosemjson);
      header('Location: login.php?cadastro=true');
    }else{
      $dados=["usuarios"=>[]];
      $dados["usuarios"][]=$_POST;
      $formdados=json_encode($dados); //json string
      file_put_contents($arquivo,$formdados);
      echo "arquivo criado";
    }
  }

}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Cadastro de Pessoas</title>

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <!-- Início do sript JQuery JS -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <!-- Fim do script JQuery JS -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

          <!-- Bootstrap Core CSS -->
          <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

          <!-- MetisMenu CSS -->
          <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

          <!-- Custom CSS -->
          <link href="dist/css/sb-admin-2.css" rel="stylesheet">

          <!-- Custom Fonts -->
          <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

          <style>
          body{
          background-color:green;
          }
          .container{
           padding-top:50px;
          }
          </style>

      </head>

      <body>

      <div class="container">
      	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12"><!-- Container Geral -->

                <form  action="cadastro.php" method="post" enctype="multipart/form-data"><!-- Inicio Form -->

                  <div class="panel panel-default"><!-- Inicio Panel Geral -->
                      <div class="panel-heading"><!-- Titulo Panel -->
                          <a href="#" style="outline:none;"><p class="fa fa-file-o" style="font-size:20px; margin-top:10px; color:#bbbbbb;"><small style="font-family:arial; font-size:15px;"> Cadastro de Usuários</small></p></a>
                      </div><!-- Fim Titulo Painel  -->
                        <div class="panel-body"><!-- Corpo Panel  -->

                      			<div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                  <label for="ex1">Nome:</label>
                                  <input type="text" class="form-control" id="ex1" maxlength="40"  name="nome" placeholder="Insira seu nome" value='<?php echo isset($_POST['nome']) ? ($_POST['nome']): "" ?>'><br>
                                </div>
                      			</div><!-- Fim Div -->

                      			<div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                              <div class="col-lg-5 col-md-6 col-sm-6">
                                <label for="ex2">Email:</label>
                                <input type="email" class="form-control" id="ex2" maxlength="50"  name="email" placeholder="usuario@usuario.com" value='<?php echo isset($_POST['email']) ? ($_POST['email']): "" ?>'><br>
                              </div>
                            </div><!-- Fim Div -->

                            <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                              <div class="col-lg-5 col-md-6 col-sm-6">
                                <label for="ex3">Senha:</label>
                                <input type="password" class="form-control" id="ex3" maxlength=15  name="senha" placeholder="Informe sua senha"><br>
                              </div>
                            </div><!-- Fim Div -->

                            <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                              <div class="col-lg-5 col-md-6 col-sm-6">
                                <label for="ex4">Confirmar Senha:</label>
                                <input type="password" class="form-control" id="ex4" maxlength=15  name="confirma_senha" placeholder="Confirme sua senha"><br>
                              </div>
                            </div><!-- Fim Div -->

                            <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                              <div class="col-lg-5 col-md-6 col-sm-6">
                                <label for="ex1">Faça upload da sua foto de perfil</label>
                                <input type="file" class="form-control"  name="fotoPerfil"><br>
                              </div>
                            </div>

                            <div class="col-md-12">
                                  <?php
                                    if (isset($erro) && count($erro)) {
                                      ?>
                                      <div class="alert alert-danger">
                                        <?php
                                            echo "<b>Atenção:</b> <br>";
                                            echo implode ("<br>", $erro);
                                         ?>
                                      </div>
                                      <?php } ?>
                            </div>

                      			<div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Button -->
                              <div class="col-lg-2 col-md-6 col-sm-3">
                                <input type="submit" class="btn btn-success btn-lg btn-block" style="margin-top:17px; outline:none;" value="Cadastrar">
                              </div>
                            </div><!-- Fim Button -->

                  </form><!-- Fim Form -->
                </div><!-- Fim Corpo Panel Geral -->
            </div><!-- Fim Panel Panel-Default -->
        </div><!-- Fim Conteiner Geral -->
  	</div> <!-- Fim da Row -->
  </div>
</body>
</html>
