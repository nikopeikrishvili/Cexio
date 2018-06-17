<?php

namespace Cexio\Responses;

use Cexio\Structures\PriceStructure;
use Cexio\Error\SymbolNotFoundException;

/**
 * Description of LastPrices
 *
 * @author niko.peikrishvili
 */
class LastPrices {

    protected $prices;

    /**
     * 
     * @param array $prices
     */
    public function __construct(array $prices) {

        foreach ($prices as $price) {
            $priceStrucutre = new PriceStructure();
            $priceStrucutre->setSymbol1($price->symbol1);
            $priceStrucutre->setSymbol2($price->symbol2);
            $priceStrucutre->setPrice($price->lprice);
            $this->prices[$priceStrucutre->getSymbol1()][$priceStrucutre->getSymbol2()] = $priceStrucutre;
        }
    }

    /**
     * 
     * @param type $symbol1
     * @param type $symbol2
     * @return PriceStructure
     * @throws SymbolNotFoundException
     */
    public function getPrice($symbol1, $symbol2): PriceStructure {
        if (!key_exists($symbol1, $this->prices)) {
            throw new SymbolNotFoundException("Symbol " . $symbol1 . " was not fount in list");
        }
        if (!key_exists($symbol2, $this->prices[$symbol1])) {
            throw new SymbolNotFoundException("Pair of symbols " . $symbol1 . " and " . $symbol2 . " was not fount in list");
        }

        return $this->prices[$symbol1][$symbol2];
    }

    /**
     * 
     * @return array
     */
    public function getPricesArray(): Array {
        return $this->prices;
    }

}
