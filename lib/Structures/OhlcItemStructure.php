<?php

namespace Cexio\Structures;

/**
 * Description of OhlcItemStructure
 *
 * @author niko.peikrishvili
 */
class OhlcItemStructure {
    private $timestamp;
    private $open;
    private $high;
    private $low;
    private $close;
    private $volume;
    
    public function getTimestamp() {
        return $this->timestamp;
    }

    public function getOpen() {
        return $this->open;
    }

    public function getHigh() {
        return $this->high;
    }

    public function getLow() {
        return $this->low;
    }

    public function getClose() {
        return $this->close;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }

    public function setOpen($open) {
        $this->open = $open;
    }

    public function setHigh($high) {
        $this->high = $high;
    }

    public function setLow($low) {
        $this->low = $low;
    }

    public function setClose($close) {
        $this->close = $close;
    }

    public function setVolume($volume) {
        $this->volume = $volume;
    }




}
