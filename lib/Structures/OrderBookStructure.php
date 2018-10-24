<?php

namespace Cexio\Structures;

/**
 * Description of OrderBookStructure
 *
 * @author niko.peikrishvili
 */
class OrderBookStructure {

    protected $type;
    protected $date;
    protected $amount;
    protected $price;
    protected $tid;
    
    public function getType() {
        return $this->type;
    }

    public function getDate() {
        return $this->date;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getTid() {
        return $this->tid;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setTid($tid) {
        $this->tid = $tid;
    }



}
