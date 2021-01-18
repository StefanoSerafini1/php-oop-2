<?php
include_once __DIR__ . '/Prodotto.php';

 class Maglia extends Prodotto {
    public $tipo;
    public $size;

    public function __construct($modello, $prezzo, $marca, $taglia){
        parent::__construct($modello, $prezzo, $marca);
        $this->taglia = $taglia;
    }
    public function setType($tipo) {
        $this->tipo = $tipo;
    }
    public function getType() {
        return $this->tipo;
    }
    public function sconto() {
        return $sconto = $this->prezzo - ($this->prezzo * 0.20);
    }
 }