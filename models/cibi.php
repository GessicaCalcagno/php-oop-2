<?php

require_once __DIR__ . "/prodotti.php";

class cibi extends prodotti
{
    private string $scadenza;

    public function __construct($_nome, $_prezzo, $_id_prodotto, $_categoria, $_scadenza)
    {
        parent::__construct($_nome, $_prezzo, $_id_prodotto, $_categoria);
        $this->scadenza = $_scadenza;
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
}
