<?php

// -------------- connect to database ------------------------
function connectToDB() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=laracast_course', 'root', '');
    } catch (PDOException $e) {
        die('Could not connect');
    }
}
//----------------------------------------------------------------------

function dd($data) {
    echo  '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function dumper($data) {
    echo  '<pre>';
    var_dump($data);
    echo '</pre>';
}

function displayArray($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
