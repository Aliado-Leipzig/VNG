<?php
    header('Content-Type: application/json');
    $parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
    require_once( $parse_uri[0] . 'wp-load.php' );

    $offset = $_POST['offset'];
    $sammlung = $_POST['sammlung'];

    $werke_query = get_werke_query_by_sammlung($offset, $sammlung);

    $data = array();

    $data['posts'] = fill_werke($werke_query->posts);
    $data['max_posts'] = $werke_query->found_posts;

    echo json_encode($data);