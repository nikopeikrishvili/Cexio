<?php

namespace Cexio\Structures;

/**
 * Description of ConvertStructure
 *
 * @author niko.peikrishvili
 */
class ConvertStructure {
    protected $symbol1;
    protected $symbol2;
    protected $amount;
    
    
    public function getSymbol1() {
        return $this->symbol1;
    }

    public function getSymbol2() {
        return $this->symbol2;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setSymbol1($symbol1) {
        $this->symbol1 = $symbol1;
    }

    public function setSymbol2($symbol2) {
        $this->symbol2 = $symbol2;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }


}
