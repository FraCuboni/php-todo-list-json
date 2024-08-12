<?php

// salvo il json come stringa
$string = file_get_contents('todo.json');

// trasformo stringa in elemento php
$list = json_decode($string);

var_dump($list);


// modifico il file json

// restituisco il json per js

// modifico l'header del file in modo da renderlo un json
header('Content_type: application/json');
// stampo l'elemento php in string
echo json_encode($list);
