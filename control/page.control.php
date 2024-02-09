<?php

class page extends controller{

  function __construct() {
    parent::__construct();
  }

  function index() {
    $this->view->render('page/index');
  }

  function empresa() {
    $this->view->render('page/empresa');
  }

  function equipe() {
    $this->view->render('page/equipe');
  }

  function mapa() {
    $this->view->render('page/mapa');
  }

  function servicos() {
    $this->view->render('page/servico');
  }

  function inventario() {
    $this->view->render('page/inventario');
  }

  function prm() {
    $this->view->render('page/prm');
  }

  function cliente() {
    $this->view->render('page/cliente');
  }

  function imprensa() {
    $this->view->render('page/imprensa');
  }

  function contato() {
    $this->view->render('page/contato');
  }

  function facilities() {
    $this->view->render('page/facilities');
  }

  function servico_temporario() {
    $this->view->render('page/servico-temporario');
  }

  function curriculo() {
    $this->view->render('page/curriculo');
  }

}
