<?php

namespace Cexio\Structures;

/**
 * Description of PriceStructure
 *
 * @author niko.peikrishvili
 */
class PriceStructure {
    protected $symbol1;
    protected $symbol2;
    protected $price;
    public function getSymbol1() {
        return $this->symbol1;
    }

    public function getSymbol2() {
        return $this->symbol2;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setSymbol1($symbol1) {
        $this->symbol1 = $symbol1;
    }

    public function setSymbol2($symbol2) {
        $this->symbol2 = $symbol2;
    }

    public function setPrice($price) {
        $this->price = $price;
    }


}
