<?php

namespace Cexio\Structures;

/**
 * {
 *  "timestamp": "1513166480",
 *  "low": "17200",
 *  "high": "17920",
 *  "last": "17420",
 *  "volume": "2042.59581123",
 *  "volume30d": "81150.14153359",
 *  "bid": 17400.04,
 *  "ask": 17418.2
 * }
 *
 * @author niko.peikrishvili
 */
class TickerStructure {
    protected $timestamp;
    protected $low;
    protected $hight;
    protected $last;
    protected $volume;
    protected $volumen30d;
    protected $bid;
    protected $ask;
    protected $symbol1;
    protected $symbol2;
    
    public function getTimestamp() {
        return $this->timestamp;
    }

    public function getLow() {
        return $this->low;
    }

    public function getHight() {
        return $this->hight;
    }

    public function getLast() {
        return $this->last;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function getVolumen30d() {
        return $this->volumen30d;
    }

    public function getBid() {
        return $this->bid;
    }

    public function getAsk() {
        return $this->ask;
    }

    public function getSymbol1() {
        return $this->symbol1;
    }

    public function getSymbol2() {
        return $this->symbol2;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }

    public function setLow($low) {
        $this->low = $low;
    }

    public function setHight($hight) {
        $this->hight = $hight;
    }

    public function setLast($last) {
        $this->last = $last;
    }

    public function setVolume($volume) {
        $this->volume = $volume;
    }

    public function setVolumen30d($volumen30d) {
        $this->volumen30d = $volumen30d;
    }

    public function setBid($bid) {
        $this->bid = $bid;
    }

    public function setAsk($ask) {
        $this->ask = $ask;
    }

    public function setSymbol1($symbol1) {
        $this->symbol1 = $symbol1;
    }

    public function setSymbol2($symbol2) {
        $this->symbol2 = $symbol2;
    }




}
