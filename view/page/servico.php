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
  <link rel="stylesheet" href="/dist/css/servico.css" />
</head>
<body>
  <?php include_once 'inc/nav.inc.php' ?>
  <div class="container">
    <?php include_once 'inc/header.inc.php' ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-interno">
          <div class="panel-heading"><i class="fa fa-arrow-right fa-pull-left fa-lg" aria-hidden="true"></i>SERVIÇOS</div>
          <div class="panel-body text-justify">
            <p>
              O principal foco da Repor é proporcionar uma melhor exposição de produtos no ponto de venda, oferecendo ao mercado promotores treinados, mais transparência e confiabilidade nas informações. Nesse setor, confira os principais serviços que a empresa oferece:
            </p>
            <div class="row">
              <div class="col-md-4 text-center">
                <div class="box">
                  <div class="box-content">
                    <h1 class="tag-title">PROMOTOR CONSORCIADO</h1>
                    <hr />
                    <p>Contratado por diversas empresas, esse promotor faz a reposição de várias marcas dentro de uma mesma loja, sem se deslocar para outras unidades. É uma excelente opção para pequenas e médias empresas que desejam reduzir custos.</p>
                    <br />
                    <!--<a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>-->
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="box">
                  <div class="box-content">
                    <h1 class="tag-title">PROMOTOR EXCLUSIVO</h1>
                    <hr />
                    <p>Atua com exclusividade para um cliente que pode elaborar um roteiro para orientá-lo nas tarefas do dia a dia. Com esse planejamento é possível determinar quais dias e lojas que devem ser visitadas, garantindo o abastecimento de forma personalizada.</p>
                    <br />
                    <!--<a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>-->
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box">
                  <div class="box-content">
                    <h1 class="tag-title text-center">Outros Serviços</h1>
                    <hr />
                    <p>
                      <ul>
                        <li>Inventário</li>
                        <li>Promotor de abordagem</li>
                        <li>Auxiliar de produção</li>
                        <li>Auxiliar de carga e descarga</li>
                        <li>Auxiliar de caixa</li>
                        <li>Recepcionista</li>
                        <li>Auxiliar de empilhadeira</li>
                      </ul>
                    </p>
                    <br />
                    <!--<a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>-->
                  </div>
                </div>
              </div>
            </div>
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
