<?php
session_start();
header('Cache-Control: no-cache');
header('Content-Type: application/json');

require_once '../config/config.php';
$db = new mysqli(_DATABASE_SERVER_, _DATABASE_USER_, _DATABASE_PASS_, _DATABASE_NAME_);
$searchTerm = isset($_GET['term']) ? $_GET['term'] : '';

$result = $db->query("select id, dsc from fornecedor where dsc like '%$searchTerm%'");
while ($row = $result->fetch_assoc())
{
  $data_json[] = array('value'=> $row['id'], 'label' => $row['dsc']);
}

if (isset($data_json)) {
  echo json_encode($data_json);
}
?>
