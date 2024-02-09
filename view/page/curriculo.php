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
  <link rel="stylesheet" href="/dist/css/curriculo.css" />
</head>
<body>
  <?php include_once 'inc/nav.inc.php' ?>
  <div class="container">
    <?php include_once 'inc/header.inc.php' ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-interno">
          <div class="panel-heading"><i class="fa fa-arrow-right fa-pull-left fa-lg" aria-hidden="true"></i>TRABALHE COM A GENTE</div>
          <div class="panel-body text-justify">
            <form class="well form-horizontal">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Informações Pessoais</a></li>
                <li><a data-toggle="tab" href="#menu1">Documentos</a></li>
                <li><a data-toggle="tab" href="#menu2">Registros de Formação</a></li>
                <li><a data-toggle="tab" href="#menu3">Informações Profissionais</a></li>
              </ul>
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <div class="row spacer">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Nome</label>
                      <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="fullName" name="fullName" placeholder="Nome Completo" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">E-mail</label>
                      <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="fullName" name="fullName" placeholder="pessoa@pessoa.com" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Endereço</label>
                      <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="fullName" name="fullName" placeholder="" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Complemento</label>
                      <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="fullName" name="fullName" placeholder="" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Bairro</label>
                      <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="fullName" name="fullName" placeholder="" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Cidade</label>
                      <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="fullName" name="fullName" placeholder="" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">CEP</label>
                      <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="fullName" name="fullName" placeholder="00000-000" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Estado</label>
                      <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                          <select class="selectpicker form-control">
                            <option value="" selected="selected">Selecione</option>
                            <option value="0">Amazonas</option>
                            <option value="1">Amapá</option>
                            <option value="2">Bahia</option>
                            <option value="3">Ceará</option>
                            <option value="4">Distrito Federal</option>
                            <option value="5">Espírito Santo</option>
                            <option value="6">Goiás</option>
                            <option value="7">Maranhão</option>
                            <option value="8">Minas Gerais</option>
                            <option value="9">Mato Grosso do Sul</option>
                            <option value="10">Mato Grosso</option>
                            <option value="11">Pará</option>
                            <option value="12">Paraíba</option>
                            <option value="13">Pernambuco</option>
                            <option value="14">Piauí</option>
                            <option value="15">Paraná</option>
                            <option value="16">Rio de Janeiro</option>
                            <option value="17">Rio Grande do Norte</option>
                            <option value="18">Rio Grande do Sul</option>
                            <option value="19">Rondônia</option>
                            <option value="20">Roraima</option>
                            <option value="21">Santa Catarina</option>
                            <option value="22">Sergipe</option>
                            <option value="23">São Paulo</option>
                            <option value="24">Tocantins</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Data Nascimento</label>
                      <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="fullName" name="fullName" placeholder="dd/mm/yyyy" class="form-control" required="true" value="" type="date">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Local Nascimento</label>
                      <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="fullName" name="fullName" placeholder="Cidade de Nascimento" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Filiação</label>
                      <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="fullName" name="fullName" placeholder="" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Sexo</label>
                      <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                          <label class="radio-inline" for="radios-0">
                          <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
                          Masculino
                          </label>
                          <label class="radio-inline" for="radios-1">
                          <input name="radios" id="radios-1" value="2" type="radio">
                          Feminino
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Estado</label>
                      <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                          <select class="selectpicker form-control">
                            <option value="" selected="selected">Selecione</option>
                            <option value="0">Casado</option>
                            <option value="1">Solteiro</option>
                            <option value="2">Separado</option>
                            <option value="3">Divorciado</option>
                            <option value="4">Viúvo</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Dependentes</label>
                      <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                          <select class="selectpicker form-control">
                            <option value="" selected="selected">Selecione</option>
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="5">06</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="singlebutton"></label>
                      <div class="col-md-4">
                        <a data-toggle="tab" class="btn btn-primary" href="#menu1">Próximo</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                  <h3>Documentos</h3>
                </div>
                <div id="menu2" class="tab-pane fade">
                  <h3>Registro de Formação</h3>
                </div>
                <div id="menu3" class="tab-pane fade">
                  <h3>Informações Profissionais</h3>
                </div>
              </div>
            </form>
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
