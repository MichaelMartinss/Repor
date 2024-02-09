<?php
require_once 'inc/require.inc.php';
$pageTitle = 'Repor Brasil | Página Inicial';
$pageContent = '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include_once 'inc/head.inc.php'; ?>
  <link rel="stylesheet" href="/dist/css/mapa.css" />
</head>
<body>
    <?php include_once 'inc/nav.inc.php' ?>
    <div class="container">
        <?php include_once 'inc/header.inc.php' ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-interno">
                    <div class="panel-heading"><i class="fa fa-arrow-right fa-pull-left fa-lg" aria-hidden="true"></i>ONDE ATUAMOS</div>
                    <div class="panel-body text-justify">
                        <div id="map"></div>
                    </div>
                    <div class="panel-footer">
                        <ul class="list-group">
                            <li class="list-group-item">
                            <h4 class="list-group-item-heading">Cuiabá / MT</h4>
                            <p class="list-group-item-text">Rua Rio Grande do Norte, 156</p>
                            <p class="list-group-item-text">Bairro: Campo Velho - CEP 78065-266</p>
                            <p class="list-group-item-text">Tel.: (65) 3027 - 4141 / 3027 - 2424</p>
                            <p class="list-group-item-text">gilberto@reporbrasil.com.br</p>
                            </li>
                            <li class="list-group-item">
                            <h4 class="list-group-item-heading">São Paulo / SP</h4>
                            <p class="list-group-item-text">Rua Retiro Grande, 14</p>
                            <p class="list-group-item-text">Bairro: Tatuapé - CEP: 03306-040</p>
                            <p class="list-group-item-text">Tel.: (11) 2227 - 7210 | 2296-8001</p>
                            <p class="list-group-item-text">comercial@reporbrasil.com.br</p>
                            </li>
                            <li class="list-group-item">
                            <h4 class="list-group-item-heading">Lauro de Freitas / BA</h4>
                            <p class="list-group-item-text">Av. Santos Dumont, 6105 / 05 - Condomínio Aqua Marina</p>
                            <p class="list-group-item-text">Bairro: Portão - CEP: 42700-000</p>
                            <p class="list-group-item-text">Tel.: (71) 3289 - 5969</p>
                            <p class="list-group-item-text">sidney@reporbrasil.com.br</p>
                            </li>
                            <li class="list-group-item">
                            <h4 class="list-group-item-heading">Campo Grande / MS</h4>
                            <p class="list-group-item-text">Av. Interlagos, 314</p>
                            <p class="list-group-item-text">Bairro: Vila Morumbi - CEP: 79052-030</p>
                            <p class="list-group-item-text">Tel.: (67) 3388 - 6970</p>
                            <p class="list-group-item-text">carlos@reporbrasil.com.br</p>
                            </li>
                        </ul>
                    </div>
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
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyAKEkV5C7Pujry9JyKunpYyClPakYlp7JU"></script>
    <script src="/dist/js/vendor/gmaps.min.js"></script>
    <script src="/dist/js/mapa.js"></script>
</body>
</html>
