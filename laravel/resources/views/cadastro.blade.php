@extends('layouts.master')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12"><!-- Container Geral -->
      <div class="col-xs-12">
        <h1>Cadastro</h1>
      </div>
      <form  action="cadastro.php" method="post" enctype="multipart/form-data" class="row"><!-- Inicio Form -->

        <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
          <div class="col-lg-5 col-md-6 col-sm-6">
            <label for="ex1">Tipo de Pessoa:</label>
            <select type="text" class="form-control" id="ex1" maxlength="40"  name="tipoDePessoa">
              <option value="pf">Pessoa Fisica</option>
              <option value="pj">Pessoa Juridica</option>
            </select><br>
          </div>
        </div><!-- Fim Div -->


        <!--INICIO JAVASCRIPT = ESPERAR O JAVASCRIPT PARA ACRESCENTAR ESSES DADOS NO FORMULARIO -->
        <!-- private $sobrenome;
        private $dataDeNascimento;
        private $cpf;
        private $cnpj;
        private $sexo; -->
        <!-- FIM JAVASCRIPT -->

        <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
          <div class="col-lg-5 col-md-6 col-sm-6">
            <label for="ex1">Nome ou Nome da Empresa:</label>
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
            <label for="ex2">Telefone:</label>
            <input type="text" class="form-control" id="ex5" maxlength="50"  name="telefone" placeholder="11962928739" value='<?php echo isset($_POST['telefone']) ? ($_POST['telefone']): "" ?>'><br>
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
            <input type="file" name="fotoPerfil"><br>
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
            <input id="espaco2" type="submit" class="btn btn-success btn-lg btn-block" style="margin-top:17px; outline:none;" value="Cadastrar">
          </div>
        </div><!-- Fim Button -->

      </form><!-- Fim Form -->
    </div><!-- Fim Panel Panel-Default -->
  </div><!-- Fim Conteiner Geral -->
</div> <!-- Fim da Row -->
</div>



@stop
