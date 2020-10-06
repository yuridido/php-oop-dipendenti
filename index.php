<?php
require_once 'classes/Dipendente.php';
require_once 'classes/Dirigente.php';
// require_once 'traits/Matricola.php';

$personale1 = new Dipendente('Mario', 'Rossi');
var_dump($personale1);


try {
    $personale2 = new Dirigente('Diego', 'Bianchi', 4, 'Spettacolo');
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}
