<?php
class prodotti{
    protected string $nome;
    protected float $prezzo;
    private int $id_prodotto;
    protected categorie $categoria;
    // private string $immagine;
    
     public function __construct(string $_nome, float $_prezzo, int $_id_prodotto, categorie $_categoria)
     {
        $this-> nome = $_nome;
        $this-> prezzo = $_prezzo;
        $this->id_prodotto = $_id_prodotto;
        $this -> categoria = $_categoria;
        
     }


    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of prezzo
     */ 
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Get the value of id_prodotto
     */ 
    public function getId_prodotto()
    {
        return $this->id_prodotto;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }
}