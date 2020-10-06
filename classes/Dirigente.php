<?php

class Dirigente extends Dipendente {
    public $livello;
    public $settore;

    public function __construct($_nome, $_cognome, $_livello, $_settore) {
        parent::__construct($_nome, $_cognome);
        $this->livello = $_livello;
        $this->settore = $_settore;

    }

}
