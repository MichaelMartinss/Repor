<?php

function redirect($strUrl) {
  echo "<script>window.location='$strUrl';</script>";
}

function getIP() {
  return $_SERVER['REMOTE_ADDR'];
}

function showMessage($strMessage, $event = null) {
  if(isset($event)) {
    if($event == 'error') {
      errorMessage($strMessage);
    }elseif($event == 'info') {

    }else {
      sucessMessage($strMessage);
    }

  }else {
    sucessMessage($strMessage);
  }
}

function errorMessage($strMessage) {
  echo '<div class="alert alert-dismissible alert-danger">'
  .'<button type="button" class="close" data-dismiss="alert">&times;</button>'
  ."<strong><i class='fa fa-exclamation-circle fa-fw' aria-hidden='true'></i></strong> $strMessage"
  .'</div>';
}

function sucessMessage($strMessage) {
  echo '<div class="alert alert-dismissible alert-success">'
  .'<button type="button" class="close" data-dismiss="alert">&times;</button>'
  ."<strong><i class='fa fa-check-circle fa-fw' aria-hidden='true'></i></strong> $strMessage"
  .'</div>';
}

function getRowValue($row, $column) {
  return $row[$column];
}

## date - data normal
## month - descritivo mes
function printRowValue($row, $column, $format = null) {
  if(isset($row[$column])) {
    if(!isset($format)) {
      echo $row[$column];
    } else {
      if($format=='date') {
        echo formatDMY($row[$column]);
      }elseif($format == 'month') {
        echo ucfirst(formatMonth($row[$column]));
      }elseif ($format == 'year') {
        echo ucfirst(formatYear($row[$column]));
      }
    }
  }else{
    echo '';
  }
}

function formatDMY($value) {
  return strftime('%d/%m/%Y', strtotime($value));
}

function formatMonth($value) {
  return strftime('%B', strtotime($value));
}

function formatYear($value) {
  return strftime('%Y', strtotime($value));
}

function getRow($result) {
  if(isset($result)) {
    return mysqli_fetch_array($result, MYSQLI_ASSOC);
  }
}

function freeResult($result) {
  if(isset($result)) {
    mysqli_free_result($result);
  }
}

function seekResult($result, $seek) {
  if(isset($result)) {
    mysqli_data_seek($result, $seek);
  }
}

function getSelected($value, $compare) {
  return ($value == $compare) ? 'selected' : '';
}

function getSelectOption($row, $value, $text, $compare = '') {
  $value      = getRowValue($row, $value);
  $text       = getRowValue($row, $text);
  $selected   = ($value == $compare) ? 'selected' : '';
  echo "<option $selected value='$value'>$text</option>";
}

function checkPermission($action) {

  if($_SESSION['ck_nivel'] != 99) { return false; }
  return true;
}

function bindValue($value) {
  echo isset($value) ? $value : '';
}

function printValue($value) {
  echo isset($value) ? $value : '';
}

function bindAction($action, $param1 = null, $param2 = null) {
  if(isset($param2)) {
    echo ($action.$param1.'/'.$param2);
  }else {
    if(isset($param1)) {
      echo ($action.$param1);
    } else {
      echo ($action);
    }
  }
}

function formatarDataView($dateValue) {
  if (isset($dateValue) && $dateValue != '')
  return date('d/m/Y', strtotime($dateValue));
}
