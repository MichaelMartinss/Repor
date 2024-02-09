<?php
require_once 'inc/require.inc.php';
$pageTitle = 'Repor Brasil | Página Inicial';
$pageContent = '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include_once 'inc/head.inc.php'; ?>
  <link rel="stylesheet" href="/dist/css/index.css" />
  <link rel="stylesheet" href="/dist/css/inventario.css" />
</head>
<body>
  <?php include_once 'inc/nav.inc.php' ?>
  <div class="container">
    <?php include_once 'inc/header.inc.php' ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-interno">
          <div class="panel-heading"><i class="fa fa-arrow-right fa-pull-left fa-lg" aria-hidden="true"></i>INVENTÁRIO</div>
          <div class="panel-body text-justify">
            <p>
            <h4>INVENTÁRIO DE PRESENÇA</h4>
            Prestação de serviço ideal para quem deseja reduzir a ruptura nas gôndolas, o Inventário de Presença tem o objetivo de controlar o fluxo de produtos, evitando a quebra nas vendas, e consequentemente, a falta das mercadorias do cliente, impedindo que o consumidor final leve para casa produtos da concorrência.
            Com o Inventário de Presença é possível reduzir rupturas na compra e na venda, pois com os relatórios gerados se pode detectar as divergências entre o estoque virtual e os produtos que estão expostos na gôndola das redes atacadistas e varejistas.
            </p>
            <p>
            <h4>INVENTÁRIO DE ESTOQUE ROTATIVO</h4>
            Através dessa prestação de serviço o cliente obtém um controle maior dos itens em estoque, evitando falhas que podem surgir da combinação de fatores relacionados a pessoas, processos e tecnologias.
            Com Inventário Rotativo, é possível garantir ao cliente um controle maior dos itens em estoque, pois ele é realizado com apuração de divergências em 100%, proporcionando maior acuracidade nas informações obtidas, auxiliando na tomada de decisão para compras, promoções e acompanhamento da movimentação de estoque.
            </p>
            <p>
            <h4>INVENTÁRIO DE PATRIMÔNIO</h4>
            Esse serviço envolve o cadastramento com chapeamento dos bens (fixação de plaquetas) para permitir o controle patrimonial, mediante a atualização mensal do cadastro e inventários periódicos.
            </p>
            <p>
            <h4>CONFERÊNCIA DE RECEBIMENTO DE MERCADORIAS</h4>
            Através desse serviço uma equipe de conferentes da Repor realiza dentro das dependências da empresa, do Centro de Distribuição (CD) ou das lojas do cliente, a comparação dos itens descritos nas notas fiscais com os produtos que saem ou entram na empresa, apontando quando ocorrem divergências entre esses números.
            Esse trabalho, que pode ser desenvolvido em parceria com o cliente, proporciona maior acuracidade na saída de mercadorias do CD para o cliente, do CD para a loja ou ainda de loja para loja.
            </p>
          </div>
          <div class="panel-footer"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div id="Carousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active">
              <div class="row">
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/assai.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/atacadao.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/biglar.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/camil.jpg"></a></div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/carrefour.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/castelo.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/coala.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/comper.jpg"></a></div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/costasul.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/dallas.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/disolle.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/extra.jpg"></a></div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/fort.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/gota.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/mercantil.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/mika.jpg"></a></div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/nita.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/pepsico.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/roseli.jpg"></a></div>
                <div class="col-md-3"><a href="#"><img src="/dist/img/mk/sulminas.jpg"></a></div>
              </div>
            </div>
          </div>
          <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
          <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
        </div><!--.Carousel-->
      </div>
    </div>
  </div>
  <?php include_once 'inc/footer.inc.php' ?>
  <script src="/dist/js/index.js"></script>
</body>
</html>
