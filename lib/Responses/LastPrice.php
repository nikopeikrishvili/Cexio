<?php

namespace Cexio\Responses;
use Cexio\Structures\PriceStructure;
/**
 * Description of LastPrice
 *
 * @author niko.peikrishvili
 */
class LastPrice {
    protected $price;
    public function __construct(\stdClass $price) {
        $this->price = new PriceStructure();
        $this->price->setSymbol1($price->curr1);
        $this->price->setSymbol2($price->curr2);
        $this->price->setPrice($price->lprice);
    }
    
    public function getPrice(): PriceStructure {
        return $this->price;
    }


}
