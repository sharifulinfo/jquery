<?php

function get( $key = '' ){
    return trim(filter_input(INPUT_GET, $key, FILTER_SANITIZE_STRING));
}

function post( $key = '' ){
    return (filter_input(INPUT_POST, $key, FILTER_SANITIZE_STRING));
}

function  dd( $data = ''){
    echo '<pre>';
    print_r( $data );
    echo '</pre>';
    exit;
}