<?php
namespace Cexio\Responses;

use Cexio\Structures\PairStructure;
use \Cexio\Error\SymbolNotFoundException;

/**
 * Description of CurrencyLimit
 *
 * @author niko.peikrishvili
 */
class CurrencyLimit {

    private $pairs;
    private $pairWithSymbols;

    public function __construct(array $pairs) {
        foreach ($pairs as $pair) {
            $pairStructure = new PairStructure();
            $pairStructure->setSymbol1($pair->symbol1);
            $pairStructure->setSymbol2($pair->symbol2);
            $pairStructure->setMinLotSize($pair->minLotSize);
            $pairStructure->setMinLotSizeS2($pair->minLotSizeS2);
            $pairStructure->setMaxLotSize($pair->maxLotSize);
            $pairStructure->setMinPrice($pair->minPrice);
            $pairStructure->setMaxPrice($pair->maxPrice);
            $this->pairs[] = $pairStructure;
            $this->pairWithSymbols[$pairStructure->getSymbol1()][$pairStructure->getSymbol2()] = $pairStructure;
        }
    }

    public function getLimit(string $symbol1, string $symbol2): PairStructure {
        if (!key_exists($symbol1, $this->pairWithSymbols)) {
            throw new SymbolNotFoundException("Symbol " . $symbol1 . " was not fount in list");
        }
        if (!key_exists($symbol2, $this->pairWithSymbols[$symbol1])) {
            throw new SymbolNotFoundException("Pair of symbols " . $symbol1 . " and " . $symbol2 . " was not fount in list");
        }

        return $this->pairWithSymbols[$symbol1][$symbol2];
    }

    public function getPairs(): array {
        return $this->pairs;
    }

}
