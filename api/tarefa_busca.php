<?php
  session_start();
  header('Cache-Control: no-cache');
  header('Content-Type: application/json');

  require_once '../config/config.php';
  $db = new mysqli(_DATABASE_SERVER_, _DATABASE_USER_, _DATABASE_PASS_, _DATABASE_NAME_);
  $searchTerm = isset($_GET['term']) ? $_GET['term'] : '';
  $cliente_id = $_SESSION['ck_cliente_id'];
  $projeto_id = $_SESSION['tmp_projeto'];

  $sql = "select t.id, concat(coalesce(t.data_inicio,''), ' | ', t.dsc) dsc
  from tarefa t
  join projeto p on p.id = t.projeto_id
  where t.status = 1 and t.tarefa_id is null
  and t.dsc like '%$searchTerm%'
  and p.cliente_id = $cliente_id
  and t.projeto_id = $projeto_id";

  $result = $db->query($sql);
  while ($row = $result->fetch_assoc())
  {
    $data_json[] = array('value'=> $row['id'], 'label' => $row['dsc']);
  }

  if (isset($data_json)) {
    echo json_encode($data_json);
  }
?>
