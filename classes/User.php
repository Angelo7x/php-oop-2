<?php 

class User {
    public $nome;
    public $cognome;
    public $eta;
    public $email;
    public $cartadicredito;


    function __construct($_nome, $_cognome, $_eta, $_email)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
        $this->email = $_email;
    }

    public function insertCreditCard($_cartadicredito){
        $this->cartadicredito = $_cartadicredito;
    }
}