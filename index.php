<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>Eco Green</title>
</head>

<body>
  <?php include 'navbar-vero.php' ?>
  <!-- FIM NAVBAR -->

  <!-- INICIO NAVBAR SECUNDARIA -->
  <?php include 'navbar-two-vero.php' ?>

  <!-- Carrossel -->
  <div class="container-fluid">
    <div class="row">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active" style="background-image:url('images/algodao.jpg')">
            <div class="carousel-caption">
              <h3>Quer conhecer sobre nossas roupas com algodão sustentavel?</h3><br>
              <button id="buy" class="btn btn-default" type="submit">Clique aqui</button>
            </div>
          </div>
          <div class="item" style="background-image:url('images/alimentos.jpg')">
            <div class="carousel-caption">
              ...
            </div>
          </div>
          <div class="item" id="paisagem" style="background-image:url('images/paisagem-natural.jpg')">
            <div class="carousel-caption">
              ...
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>



  <!-- Produtos -->
  <div class="container">
    <div class="row">
      <div class="destaques col-xs-12">
        <h2 style="font-weight:300; padding-left:20px;"><i class="fab fa-hotjar"></i> Mais vendidos</h2>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="produto">
            <img src="images/camiseta-branca.png" alt="">
            <h3 class="text-center">Camiseta Branca</h3>
            <!-- <p  class="text-center">Esta camiseta e branca</p> -->
            <p class="preco text-center">R$10,00</p>
            <button id="buy" class="btn btn-info" type="submit">Comprar</button>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="produto">
            <img src="images/camiseta-branca.png" alt="">
            <h3>Camiseta Branca</h3>
            <!-- <p>Esta camiseta e branca</p> -->
            <p class="preco">R$10,00</p>
            <button id="buy" class="btn btn-info" type="submit">Comprar</button>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="produto">
            <img src="images/camiseta-branca.png" alt="">
            <h3>Camiseta Branca</h3>
            <!-- <p>Esta camiseta e branca</p> -->
            <p class="preco">R$10,00</p>
            <button id="buy" class="btn btn-info" type="submit">Comprar</button>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="produto">
            <img src="images/camiseta-branca.png" alt="">
            <h3>Camiseta Branca</h3>
            <!-- <p>Esta camiseta e branca</p> -->
            <p class="preco">R$10,00</p>
            <button id="buy" class="btn btn-info" type="submit">Comprar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="destaques col-xs-12">
        <h2 style="font-weight:300; padding-left:20px; "><i class="fa fa-plus"></i> Produtos novos</h2>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="produto">
            <img src="images/camiseta-branca.png" alt="">
            <h3>Camiseta Branca</h3>
            <!-- <p>Esta camiseta e branca</p> -->
            <p class="preco">R$10,00</p>
            <button id="buy" class="btn btn-info" type="submit">Comprar</button>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="produto">
            <img src="images/camiseta-branca.png" alt="">
            <h3>Camiseta Branca</h3>
            <!-- <p>Esta camiseta e branca</p> -->
            <p class="preco">R$10,00</p>
            <button id="buy" class="btn btn-info" type="submit">Comprar</button>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="produto">
            <img src="images/camiseta-branca.png" alt="">
            <h3>Camiseta Branca</h3>
            <!-- <p>Esta camiseta e branca</p> -->
            <p class="preco">R$10,00</p>
            <button id="buy" class="btn btn-info" type="submit">Comprar</button>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="produto">
            <img src="images/camiseta-branca.png" alt="">
            <h3>Camiseta Branca</h3>
            <!-- <p>Esta camiseta e branca</p> -->
            <p class="preco">R$10,00</p>
            <button id="buy" class="btn btn-info" type="submit">Comprar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer-vero.php' ?>

</body>

</html>