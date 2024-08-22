<?php
// Carico i dati JSON esistenti
$string = file_get_contents('todo.json');
$list = json_decode($string, true);  // Decodifica come array associativo

// Verifico se la richiesta POST contiene nuovi dati
$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (isset($data['toDoNew'])) {
    $toDoItem = $data['toDoNew'];
    // Log per verificare se i dati vengono ricevuti
    error_log("Dati ricevuti: " . $toDoItem);

    // Aggiungo il nuovo elemento alla lista
    $list[] = $toDoItem;

    // Salvo la lista aggiornata nel file JSON
    file_put_contents('todo.json', json_encode($list));
}

// Imposto l'header della risposta come JSON
header('Content-Type: application/json');

// Restituisco la lista aggiornata come JSON
echo json_encode($list);
