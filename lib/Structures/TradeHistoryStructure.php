<?php

namespace Cexio\Structures;

/**
 * Description of TradeHistoryStructure
 *
 * @author niko.peikrishvili
 */
class TradeHistoryStructure {
    protected $timestamp;
    protected $bids;
    protected $asks;
    protected $pair;
    protected $symbol1;
    protected $symbol2;
    protected $id;
    protected $sellTotal;
    protected $buyTotal;
    
    public function getTimestamp() {
        return $this->timestamp;
    }

    public function getBids() {
        return $this->bids;
    }

    public function getAsks() {
        return $this->asks;
    }

    public function getPair() {
        return $this->pair;
    }

    public function getSymbol1() {
        return $this->symbol1;
    }

    public function getSymbol2() {
        return $this->symbol2;
    }

    public function getId() {
        return $this->id;
    }

    public function getSellTotal() {
        return $this->sellTotal;
    }

    public function getBuyTotal() {
        return $this->buyTotal;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }

    public function setBids($bids) {
        $this->bids = $bids;
    }

    public function setAsks($asks) {
        $this->asks = $asks;
    }

    public function setPair($pair) {
        $this->pair = $pair;
        $this->symbol1 = explode(':', $this->pair)[0];
        $this->symbol2 = explode(':', $this->pair)[1];
    }


    public function setId($id) {
        $this->id = $id;
    }

    public function setSellTotal($sellTotal) {
        $this->sellTotal = $sellTotal;
    }

    public function setBuyTotal($buyTotal) {
        $this->buyTotal = $buyTotal;
    }


}
