<?php
//Trait
trait HaSconto {
    private $sconto = 0;

    public function setSconto($importo) {
        if ($importo <= 0 || $importo >= 100) {
            throw new ScontoNonValidoException("Il valore dello sconto deve essere tra 0 e 100.");
        }
        $this->sconto = $importo;
    }

    public function getSconto() {
        return $this->sconto;
    }

    public function getPrezzoDopoSconto() {
        return $this->prezzo - ($this->prezzo * ($this->sconto / 100));
    }
}