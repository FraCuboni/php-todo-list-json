<?php

// salvo il json come stringa
$string = file_get_contents('todo.json');

// trasformo stringa in elemento php
$list = json_decode($string);

var_dump($list);
