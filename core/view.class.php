<?php

class view {

  public $sessionNome;
  public $sessionId;
  public $sessionNivel;
  public $sessionCliente;
  public $sessionRecurso;

  function __construct() {
    $this->sessionNome    = isset($_SESSION['ck_user']) ? $_SESSION['ck_user'] : null;
    $this->sessionId      = isset($_SESSION['ck_id']) ? $_SESSION['ck_id'] : null;
    $this->sessionNivel   = isset($_SESSION['ck_nivel']) ? $_SESSION['ck_nivel'] : null;
    $this->sessionRecurso = isset($_SESSION['ck_recurso']) ? $_SESSION['ck_recurso'] : null;
    $this->sessionCliente = isset($_SESSION['ck_cliente_id']) ? $_SESSION['ck_cliente_id'] : null;
  }

  public function render($viewsrc) {
    require 'view/' . $viewsrc . '.php';
  }

}
