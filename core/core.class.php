<?php

session_start();

class core {

  function pageRedirec($strPage, array $param = null) {
    if (isset($param)) {
      foreach ($param as $value) {
        $strPage .= "/$value";
        header("Location:$strPage");
      }
    } else {
      header("Location:$strPage");
    }
    exit;
  }

    function hashMD5($strValue) {
        return md5($strValue);
    }

    function formatarMoedaBanco($dblValue) {

        $_result = 0;
        if (isset($dblValue)) {
            $_result = $dblValue;
            $_result = str_replace('.', '', $_result);
            $_result = str_replace(',', '.', $_result);
        }

        return $_result;
    }

    function formatarDataBanco($dateValue) {
        if (isset($dateValue) && $dateValue != '') {
            $value = str_replace('/', '.', $dateValue);
            return date('Y.m.d', strtotime($value));
        }
    }

    function formatarDataView($dateValue) {
        if (isset($dateValue) && $dateValue != '')
            return date('d/m/Y', strtotime($dateValue));
    }

    function strpass($strValue) {

        $safe = $strValue;

        $special = array("'", 'SELECT', 'UPDATE', 'DELETE');

        foreach ($special as $char) {
            $safe = str_replace($char, '', $safe);
        }

        return trim($safe);
    }

    function quoteInsert($strValue, $withComma = true) {

        if ($withComma) {
            if(isset($strValue)) {
              return "'" . $this->strpass($strValue) . "',";
            }else {
              return 'null, ';
            }
        } else {
            if(isset($strValue)) {
            return "'" . $this->strpass($strValue) . "'";
          }else {
            return 'null';
          }
        }
    }

    function commaInsert($strValue) {
        if(isset($strValue))
            return $this->strpass($strValue) . ',';
        else
            return "null,";
    }

    function somenteNumero($strValue) {

        $value = $strValue;
        $special = array('.', ',', '-', '\\', '/', '(', ')', ' ');

        foreach ($special as $char) {
            $value = str_replace($char, '', $value);
        }

        return trim($value);
    }

    function isBlank($value) {
        if(isset($value)) {
            if($value != '') {
                return false;
            }
        }
        return true;
    }

}
