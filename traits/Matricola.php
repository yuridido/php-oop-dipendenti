<?php
trait Matricola {
    public $matricola;

    public function getMatricola() {
        $this->matricola = rand(0001, 9999);
        return $this->matricola;
    }
}

?>
