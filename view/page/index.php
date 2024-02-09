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
      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-heading text-right"><i class="fa fa-map-marker fa-pull-left fa-lg" aria-hidden="true"></i>SAIBA ONDE ATUAMOS</div>
          <div class="panel-body text-center"><img src="/dist/img/mapa.png" /></div>
          <div class="panel-footer"><a href="/page/mapa" class="btn btn-green btn-sm pull-right">SAIBA MAIS</a></div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="panel panel-warning">
          <div class="panel-heading text-right"><i class="fa fa-shopping-cart fa-pull-left fa-lg" aria-hidden="true"></i>ECONOMIZE COM A GENTE</div>
          <div class="panel-body">
            <h5 class="text-bold">Saiba o quanto voce economiza com a gente</h5>
            <div class="item-group">
              <div class="item-list">Economize seu TEMPO <a href="/page/servicos" class="btn btn-orange btn-sm pull-right">SAIBA MAIS</a></div>
              <div class="item-list">Forme sua EQUIPE <a href="/page/servicos" class="btn btn-orange btn-sm pull-right">SAIBA MAIS</a></div>
              <div class="item-list">Nossos SERVIÇOS <a href="/page/servicos" class="btn btn-orange btn-sm pull-right">SAIBA MAIS</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="panel panel-danger">
          <div class="panel-heading text-right"><i class="fa fa-handshake-o fa-pull-left fa-lg" aria-hidden="true"></i>EQUIPE REPOR BRASIL</div>
          <div class="panel-body">
            <h5 class="text-bold">Equipe REPOR oferece mão de obra altamente treinada e especializada.</h5>
            <p>
              Ações planejadas são executadas na área de venda, onde serviço, agilidade e valores são trabalhados de acordo com a necessidades de cada operação.
              O objetivo é garantir a excelencia do trabalho e certificar que todas as etapas foram cumpridas e auditadas
            </p>
          </div>
          <div class="panel-footer"><a href="/page/equipe" class="btn btn-red btn-sm pull-right">SAIBA MAIS</a></div>
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
