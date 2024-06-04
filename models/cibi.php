<?php

require_once __DIR__ . "/prodotti.php";

class Cibi extends Prodotti
{
    private string $scadenza;
    private int $pesoGr;
    private string $gusto;

    public function __construct($_nome, $_prezzo, $_id_prodotto, $_categoria, $_scadenza, int $_pesoGr, string $_gusto)
    {
        parent::__construct($_nome, $_prezzo, $_id_prodotto, $_categoria);
        $this->scadenza = $_scadenza;
        $this->pesoGr = $_pesoGr;
        $this->gusto = $_gusto;
    }


    /**
     * Get the value of scadenza
     */
    public function getScadenza()
    {
        return $this->scadenza;
    }


    /**
     * Get the value of _categoria
     */
    public function get_categoria()
    {
        return $this->categoria;
    }

    /**
     * Get the value of pesoGr
     */ 
    public function getpesoGr()
    {
        return $this->pesoGr;
    }

    /**
     * Set the value of pesoGr
     *
     * @return  self
     */ 
    public function setpesoGr($pesoGr)
    {
        $this->pesoGr = $pesoGr;

        return $this;
    }

    /**
     * Get the value of gusto
     */ 
    public function getGusto()
    {
        return $this->gusto;
    }

    /**
     * Set the value of gusto
     *
     * @return  self
     */ 
    public function setGusto($gusto)
    {
        $this->gusto = $gusto;

        return $this;
    }
}
