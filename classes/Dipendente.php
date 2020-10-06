<?php
require_once __DIR__ . '/../traits/Matricola.php';

class Dipendente {
    use Matricola;

    protected $nome;
    protected $cognome;
    protected $cod_fisc;
    protected $indirizzo;
    protected $num_matricola;


    public function __construct($_nome, $_cognome) {
        if (empty($_nome)) {
            die('Il nome non è stato indicato');
        }
        $this->nome = $_nome;

        if (empty($_cognome)) {
            die('Il cognome non è stato indicato');
        }
        $this->cognome = $_cognome;

        $this->num_matricola = $this->getMatricola();
    }
}




?>
