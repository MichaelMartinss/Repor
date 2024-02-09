<?php

##only-production
#if ($_SERVER['HTTP_HOST'] != 'loglab_gestor') {
#    ini_set('display_errors','off');
#}

class bootstrap {

  function __construct() {

    $_url = explode('/', filter_input(INPUT_GET, 'url'));

    $_controller = $_url[0];
    $_action = isset($_url[1]) ? $_url[1] : 'index';
    $_param1 = isset($_url[2]) ? $_url[2] : null;
    $_param2 = isset($_url[3]) ? $_url[3] : null;

    $_file = 'control/' . $_controller . '.control.php';
    if (!file_exists($_file)) {
      $_file = 'control/page.control.php';
      $_controller = 'page';
      $_action = 'index';
    }

    #require $_file;
    $classController = new $_controller;
    if(isset($_param1) && isset($_param2)){
      $classController->{$_action}($_param1, $_param2);
    }elseif(isset($_param1)){
      $classController->{$_action}($_param1);
    }else{
      $classController->{$_action}();
    }
  }
}
