<?php

namespace Cexio\Responses;
use \Cexio\Structures\PriceStatStructure;
/**
 * Description of PriceStats
 *
 * @author niko.peikrishvili
 */
class PriceStats {
    protected $priceStatArray;
    public function __construct(array $priceStats) {
        foreach($priceStats as $priceStat)
        {
            $priceStatStructure = new PriceStatStructure();
            $priceStatStructure->setPrice($priceStat->price);
            $priceStatStructure->setTimestamp($priceStat->tmsp);
            $this->priceStatArray[] = $priceStatStructure;
        }
    }
    
    public function getPriceStats(): Array{
        return $this->priceStatArray;
    }


}
