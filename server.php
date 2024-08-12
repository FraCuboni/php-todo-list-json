<?php

// salvo il json come stringa
$string = file_get_contents('todo.json');

// trasformo stringa in elemento php
$list = json_decode($string);

// modifico l'header del file in modo da renderlo un json
header('Content-Type: application/json');

// restituisco il json per js
echo json_encode($list);
