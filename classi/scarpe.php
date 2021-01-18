<?php
include_once __DIR__ . '/Prodotto.php';

 class Scarpa extends Prodotto {
    public $taglia;
    public function __construct($modello, $prezzo, $marca, $taglia) {
        parent::__construct($modello, $prezzo, $marca);
        $this->taglia = $taglia;
    }

    public function getDiscount() {
        return $sconto=$this->prezzo;
    }
 }