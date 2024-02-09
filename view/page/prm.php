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
</head>
<body>
  <?php include_once 'inc/nav.inc.php' ?>
  <div class="container">
    <?php include_once 'inc/header.inc.php' ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-interno">
          <div class="panel-heading"><i class="fa fa-arrow-right fa-pull-left fa-lg" aria-hidden="true"></i>PROMOTOR REPOR MÓVEL</div>
          <div class="panel-body text-justify">
            <p>
            A Repor Brasil investiu em tecnologia móvel para proporcionar um trabalho diferenciado para seus clientes, o sistema Promotor Repor Móvel, que opera em todos os estados brasileiros. Com essa ferramenta, a empresa oferece como benefício para seus clientes a possibilidade de acompanharem on-line a reposição dos seus produtos no ponto de venda.
            </p>
            <p>
            Com o suporte dessa tecnologia, os clientes da Repor podem ter um controle maior da presença dos promotores nas lojas, pois têm como acompanhar o trabalho realizado nos pontos de venda ao acessar as fotos que são enviadas diariamente para seus e-mails.
            </p>
            <p>
            Essa ferramenta permite que os clientes visualizem todo o processo e possam sugerir melhorias no trabalho realizado em campo. Eles também podem receber e-mails com listas de produtos em ruptura, pontos extras conquistados e ter um controle dos itens próximos das datas de vencimento, entre outros dados.
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
