@extends('layouts.master')
@section('content')
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
          <div class="item" style="background-image:url('images/camisa teste.jpg')">
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
        <h2 style="font-weight:300; padding-left:20px; "><i class="fa fa-plus"></i> Produtos novos</h2>
        @foreach($produtos as $produto)
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="produto">
            <img src="/{{$produto->fotoUrl ? : 'storage/fotoProduto/noimage.jpg'}}" alt="{{$produto->titulo}}">
            <h3>{{$produto->nome}}</h3>
            <!-- <p>Esta camiseta e branca</p> -->
            <p class="preco">R${{$produto->preco}}</p>
            <a id="buy" class="btn btn-info" href="/produtos/exibir/{{$produto->produto_id}}">Comprar</a>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>

  <div>
@stop
