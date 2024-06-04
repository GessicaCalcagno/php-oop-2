<?php
class Categorie
{
    protected string $nome;
    protected string $icone;

    //Solo parametri essenziali e gli altri usiamo solo setter
    public function __construct($_nome)
    {
        $this->nome = $_nome;
    }

    public function getNome()
    {
        return $this->nome;
    }


    /**
     * Get the value of icone
     */
    public function getIcone()
    {
        return $this->icone;
    }

    /**
     * Set the value of icone
     *
     */
    public function setIcone($_icone)
    {
        $this->icone = $_icone;
    }
}
