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
  <link rel="stylesheet" href="/dist/css/contato.css" />
</head>
<body>
  <?php include_once 'inc/nav.inc.php' ?>
  <div class="container">
    <?php include_once 'inc/header.inc.php' ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-interno">
          <div class="panel-heading"><i class="fa fa-envelope fa-pull-left fa-lg" aria-hidden="true"></i>FALE CONOSCO</div>
          <div class="panel-body text-justify">
            <div class="row">
              <div class="col-md-8">
                <div class="well well-sm">
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">Nome</label>
                          <input type="text" class="form-control" id="name" placeholder="Seu nome completo" required="required" />
                        </div>
                        <div class="form-group">
                          <label for="email">E-mail</label>
                          <div class="input-group">
                            <input type="email" class="form-control" id="email" placeholder="pessoa@pessoa.com" required="required" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="subject">Categoria</label>
                          <select id="subject" name="subject" class="form-control" required="required">
                            <option value="na" selected>Comercial</option>
                            <option value="service">Inventário</option>
                            <option value="suggestions">Promotor</option>
                            <option value="product">Reclamação</option>
                            <option value="product">Promoção</option>
                            <option value="product">SAC</option>
                            <option value="product">Outros</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">Mensagem</label>
                          <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Escrever mensagem ..."></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">Enviar Mensage</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-4">
                <legend><span class="glyphicon glyphicon-globe"></span> Nossos Escritórios</legend>
                <address>
                  <strong>Cuiabá / MT</strong> </br>
                  <abbr title="Phone">Tel</abbr>
                  (65) 3027 - 4141 / 3027 - 2424
                </address>
                <address>
                  <strong>São Paulo / SP</strong></br>
                  <abbr title="Phone">Tel</abbr>
                  (11) 2227 - 7210 | 2296-8001
                </address>
                <address>
                  <strong>Lauro de Freitas / BA</strong></br>
                  <abbr title="Phone">Tel</abbr>
                  (71) 3289 - 5969
                </address>
                <address>
                  <strong>Campo Grande / MS</strong></br>
                  <abbr title="Phone">Tel</abbr>
                  (67) 3388 - 6970
                </address>
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
