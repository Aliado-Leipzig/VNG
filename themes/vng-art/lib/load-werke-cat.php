<?php
	header('Content-Type: application/json');
	$parse_uri = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
	require_once($parse_uri[0] . 'wp-load.php');

	$offset = isset($_POST['offset']) ? $_POST['offset'] : 0;
	$cat = isset($_POST['category']) ? $_POST['category'] : '';
	$meta_key = isset($_POST['meta_key']) ? $_POST['meta_key'] : '';
	$excludes = isset($_POST['excludes']) ? explode(",", $_POST['excludes']) : array();

	$result = outputWerke($offset, $cat, $excludes, $meta_key);

	echo json_encode($result);

//    $data['posts'] = fill_werke($werke_query->posts);
//    $data['max_posts'] = $werke_query->found_posts;
//
//    echo json_encode($data);