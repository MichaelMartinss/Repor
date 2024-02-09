<?php

  require_once 'config/config.php';

  class database {

    function openConn() {
      $connection = new mysqli(_DATABASE_SERVER_, _DATABASE_USER_, _DATABASE_PASS_, _DATABASE_NAME_);
      $connection->set_charset("utf8");
      if (mysqli_connect_errno()) {
        trigger_error(mysqli_connect_error());
      }
      return $connection;
    }

    function dispose($conn) {
      mysqli_close($conn);
    }

    function disposeResult($result) {
      mysqli_free_result($result);
    }

    function rowCount($result) {
      return mysqli_num_rows($result);
    }

    function getResult($sql) {
      $_conn = $this->openConn();
      return mysqli_query($_conn, $sql);
    }

    function getRow($result) {
      return mysqli_fetch_array($result, MYSQLI_BOTH);
    }

    function executeRow($sql) {
      $_conn = $this->openConn();
      if ($_result = mysqli_query($_conn, $sql)) {
        $_dataRow = $this->getRow($_result);
        $this->disposeResult($_result);
        $this->dispose($_conn);
        return $_dataRow;
      }
      $this->dispose($_conn);
      return null;
    }

    function executeScalar($sql) {

      $_conn = $this->openConn();
      if ($_result = mysqli_query($_conn, $sql)) {
        $_row = $this->getRow($_result);
        $this->disposeResult($_result);
        $this->dispose($_conn);
        return $_row[0];
      }
      $this->dispose($_conn);
      return null;
    }

    function executeInsert($sql, $withReturn = false) {
      $_conn = $this->openConn();
      if ($withReturn) {
        mysqli_query($_conn, $sql);
        $_id = mysqli_insert_id($_conn);
        $this->dispose($_conn);
        return $_id;
      }

      mysqli_query($_conn, $sql);
      $this->dispose($_conn);
    }

    function executeUpdate($sql) {
      $conn = $this->openConn();
      mysqli_query($conn, $sql);
      $this->dispose($conn);
    }

    function executeDelete($sql) {
      $conn = $this->openConn();
      mysqli_query($conn, $sql);
      $this->dispose($conn);
    }

}
