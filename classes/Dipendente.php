<?php
require_once '../traits/Matricola.php'

class Dipendente {
    use getMatricola;

    protected $nome;
    protected $cognome;
    protected $cod_fisc;
    protected $indirizzo;
    protected $matricola = getMatricola;


    public function __construct($_nome, $_cognome) {
        if (empty($_nome)) {
            die('Il nome non è stato indicato');
        }
        $this->nome = $_nome;

        if (empty($_cognome)) {
            die('Il cognome non è stato indicato');
        }
        $this->cognome = $_cognome;
    }
}




?>
