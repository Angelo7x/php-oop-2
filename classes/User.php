<?php 

class User {
    public $nome;
    public $cognome;
    public $eta;
    public $email;


    function __construct($_nome, $_cognome, $_eta, $_email)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
        $this->email = $_email;
    }
}