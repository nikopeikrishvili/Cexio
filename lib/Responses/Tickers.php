<?php

namespace Cexio\Responses;

use Cexio\Structures\TickerStructure;
use Cexio\Error\SymbolNotFoundException;

/**
 * Description of Tickers
 *
 * @author niko.peikrishvili
 */
class Tickers {

    protected $tickersArray;

    public function __construct(array $tickers) {
        foreach ($tickers as $ticker) {

            $tickerStructure = new TickerStructure();
            $tickerStructure->setAsk($ticker->ask);
            $tickerStructure->setBid($ticker->bid);
            $tickerStructure->setHight($ticker->hight);
            $tickerStructure->setLast($ticker->last);
            $tickerStructure->setLow($ticker->low);
            $tickerStructure->setTimestamp($ticker->timestamp);
            $tickerStructure->setVolume($ticker->volume);
            $tickerStructure->setVolumen30d($ticker->volumen30d);
            $pair = explode(':', $ticker->pair);
            $tickerStructure->setSymbol1($pair['0']);
            $tickerStructure->setSymbol2($pair['1']);
            $this->tickersArray[$tickerStructure->getSymbol1()][$tickerStructure->getSymbol2()] = $tickerStructure;
        }
    }

    public function getTicker($symbol1, $symbol2): TickerStructure {
        if (!key_exists($symbol1, $this->tickersArray)) {
            throw new SymbolNotFoundException("Symbol " . $symbol1 . " was not fount in list");
        }
        if (!key_exists($symbol2, $this->tickersArray[$symbol1])) {
            throw new SymbolNotFoundException("Pair of symbols " . $symbol1 . " and " . $symbol2 . " was not fount in list");
        }

        return $this->tickersArray[$symbol1][$symbol2];
    }

    public function getTickersArray(): Array {
        return $this->tickersArray;
    }

}
