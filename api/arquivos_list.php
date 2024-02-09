<?php
	header('Cache-Control: no-cache');
	header('Content-Type: application/json');

	$_action_view    = '/arquivo/show/';

	require_once '../config/config.php';
	$db = new mysqli(_DATABASE_SERVER_, _DATABASE_USER_, _DATABASE_PASS_, _DATABASE_NAME_);

	$sql = 'select a.arquivo_tipo_id, a.projeto_id, at.dsc arquivo_tipo_dsc'
	.' from arquivo a'
	.' join arquivo_tipo at on at.id = a.arquivo_tipo_id'
	.' group by a.arquivo_tipo_id, a.projeto_id'
	.' order by a.date_add desc';
	$data_json = array();
	$result = $db->query($sql);
	while ($row = $result->fetch_assoc())
	{
		unset($arquivo);
		$arquivo_tipo = array('text' => $row['arquivo_tipo_dsc'], 'href' => '#');
		$sql = 'select a.id, a.dsc arquivo_dsc'
		.' from arquivo a where a.arquivo_tipo_id = '.$row['arquivo_tipo_id']
		.' order by a.dsc';
		$result_file = $db->query($sql);
		while ($row_file = $result_file->fetch_assoc()) {
			$arquivo[] = array('text' => $row_file['arquivo_dsc'], 'href' => ($_action_view.$row_file['id']));
		}

		$arr_apend['nodes'] = $arquivo;
		$data_json[] = array_merge($arquivo_tipo, $arr_apend);
	}

	if (isset($data_json)) {
		echo json_encode($data_json);
	}
