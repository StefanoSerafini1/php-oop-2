<?php

class Prodotto {
    public $modello;
    public $prezzo;
    public $marca;
    public $taglia;
    

    //Constructor
    public function __construct($modello, $prezzo, $marca) {
        $this->modello = $modello;
        $this->prezzo = $prezzo;
        $this->marca = $marca;
    }

    //Methods
    public function sconto() {
        return $sconto = $this->prezzo - ($this->prezzo * 0);
    }
}