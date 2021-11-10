<?php 

class Product {
    public $tipo;
    public $nome;
    private $anno;
    public $prezzo;

    function __construct($_tipo, $_nome, $_anno, $_prezzo)
    {
        $this->tipo = $_tipo;
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->prezzo = $_prezzo;
    }

    public function getAnno() {
        return $this->anno;
    }
}