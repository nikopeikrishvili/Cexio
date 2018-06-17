<?php
namespace Cexio\Structures;
/**
 * 
 * {
 *       "symbol1": "BTC",
 *       "symbol2": "USD",
 *       "minLotSize": 0.01,
 *       "minLotSizeS2": 2.5,
 *       "maxLotSize": 30,
 *       "minPrice": "100",
 *       "maxPrice": "35000"
 * }
 * @author niko.peikrishvili
 */
class PairStructure {
    private $symbol1;
    private $symbol2;
    private $minLotSize;
    private $minLotSizeS2;
    private $maxLotSize;
    private $minPrice;
    private $maxPrice;
    
    public function getSymbol1() {
        return $this->symbol1;
    }

    public function getSymbol2() {
        return $this->symbol2;
    }

    public function getMinLotSize() {
        return $this->minLotSize;
    }

    public function getMinLotSizeS2() {
        return $this->minLotSizeS2;
    }

    public function getMaxLotSize() {
        return $this->maxLotSize;
    }

    public function getMinPrice() {
        return $this->minPrice;
    }

    public function getMaxPrice() {
        return $this->maxPrice;
    }

    public function setSymbol1($symbol1) {
        $this->symbol1 = $symbol1;
    }

    public function setSymbol2($symbol2) {
        $this->symbol2 = $symbol2;
    }

    public function setMinLotSize($minLotSize) {
        $this->minLotSize = $minLotSize;
    }

    public function setMinLotSizeS2($minLotSizeS2) {
        $this->minLotSizeS2 = $minLotSizeS2;
    }

    public function setMaxLotSize($maxLotSize) {
        $this->maxLotSize = $maxLotSize;
    }

    public function setMinPrice($minPrice) {
        $this->minPrice = $minPrice;
    }

    public function setMaxPrice($maxPrice) {
        $this->maxPrice = $maxPrice;
    }



}
