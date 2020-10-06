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
            throw new Exception('deve essere inserito un nome');
        }
        $this->nome = $_nome;

        if (empty($_cognome)) {
            throw new Exception('deve essere inserito un cognome');
        }
        $this->cognome = $_cognome;

        $this->num_matricola = $this->getMatricola();
    }
}
