<?php 

class CartaDiCredito {
    public $numero;
    public $utente;
    private $cvv;
    public $scadenza;


    function __construct($_numero, $_utente, $_cvv, $_scadenza)
    {
        $this->numero = $_numero;
        $this->utente = $_utente;
        $this->cvv = $_cvv;
        $this->scadenza = $_scadenza;
    }

    public function getCvv() {
        return $this->cvv;
    }
}