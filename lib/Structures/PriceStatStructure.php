<?php

namespace Cexio\Structures;

/**
 * Description of PriceStatStructure
 *
 * @author niko.peikrishvili
 */
class PriceStatStructure {
    protected $timestamp;
    protected $price;
    protected $readableDate;
    
    public function getTimestamp() {
        return $this->timestamp;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getReadableDate() {
        return $this->readableDate;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
        $this->readableDate = date('Y-m-d H:i:s',$this->timestamp);
    }

    public function setPrice($price) {
        $this->price = $price;
    }


}
