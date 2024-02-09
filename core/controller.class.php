<?php

class controller extends core {

  function __construct() {
    $this->view = new view();
  }

  function inputPost($field, $ctype = null) {
    if(isset($ctype)) {
      if($ctype == 'date') {
        return $this->formatarDataBanco(filter_input(INPUT_POST, $field));
      }
    }else {
      return filter_input(INPUT_POST, $field);
    }
  }
}
