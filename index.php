<?php

header('Content-Type: application/json; charset=utf-8');

$data = filter_input(INPUT_GET, 'data', FILTER_DEFAULT);
if (empty($data)) {
    $data = "bwCapitulo";
}

require('app/control/control.php');
require ('app\model\model.php');
$control = new \control\Control();
$control->$data();