<?php

// Copyright (C) 2022 Samuel Pietro
//
// This file is part of Bíblia API.
//
// Bíblia API is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Bíblia API is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Bíblia API.  If not, see <http://www.gnu.org/licenses/>.



header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$decode = json_decode(file_get_contents("php://input"));
if (!$decode) {
    $decode = json_decode(filter_input(INPUT_POST, 'data', FILTER_DEFAULT));
}



if ($decode) {
    if (is_null($decode)) {
                $response['status'] = array(
                    'type' => 'error',
                    'value' => 'Invalid JSON value found'
                );
                $response['request'] = $_REQUEST['json'];
    } else {
        require('functions.php');
        $response['status'] = array(
           'type' => 'message',
           'value' => 'Valid JSON value found',
        );
        $response['input'] = $decode;
        $action = $decode->action;
        if ($action == "bwCapitulo") {
            $response['output'] = $action($decode->version, $decode->abrev, $decode->chapters);
        } else {
            $response['output'] = $action();
        }
    }
} else {
    $response['status'] = array(
        'type' => 'error',
        'value' => 'No JSON value set'
    );
}

$encode = json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
exit($encode);
