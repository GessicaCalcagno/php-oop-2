
<?php
require_once __DIR__ . "/categorie.php";
require_once __DIR__ . "/discount.php";
require_once __DIR__ . "/../traits/scontabile.php";
class Prodotti
{
    use HaSconto;
    protected string $nome;
    protected float $prezzo;
    private int $id_prodotto;
    protected string $immagine;
    protected Categorie $categoria;

    public function __construct(string $_nome, float $_prezzo, int $_id_prodotto, Categorie $_categoria)
    {

        if ($_nome === "") {
            throw new Exception("Errore il campo non può essere vuoto");
        }
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->id_prodotto = $_id_prodotto;
        $this->categoria = $_categoria;
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
    public function getPrezzo(): float
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

    /**
     * Get the value of immagine
     */
    public function getImmagine(): string {
        if (isset($this->immagine) && !empty($this->immagine)) {
          return $this->immagine;
        }
    
        return "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpixy.org%2Fimages%2Fplaceholder.png&f=1&nofb=1&ipt=07d4732dce811b1108de5d752a6d9184d789fe2bb220acedf2e70e60456fbb9a&ipo=images";
      }

    /**
     * Set the value of immagine
     *
     * : void -> com'è il return? definisce il dato di ritorno
     */
    public function setImmagine(string $_immagine): void
    {
        if ($_immagine === "") {
            throw new Exception("L'immagine non può essere vuota");
          }
          $this->immagine = $_immagine;
        }
}
