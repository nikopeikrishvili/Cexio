<?php

namespace Cexio\Responses;
use Cexio\Structures\TickerStructure;
/**
 * Description of GetTicker
 *
 * @author niko.peikrishvili
 */
class Ticker {
    protected  $ticker;
    
    public function __construct(\stdClass $ticker,$symbol1,$symbol2) {
        
        $tickerStructure = new TickerStructure();
        $tickerStructure->setAsk($ticker->ask);
        $tickerStructure->setBid($ticker->bid);
        $tickerStructure->setHight($ticker->hight);
        $tickerStructure->setLast($ticker->last);
        $tickerStructure->setLow($ticker->low);
        $tickerStructure->setTimestamp($ticker->timestamp);
        $tickerStructure->setVolume($ticker->volume);
        $tickerStructure->setVolumen30d($ticker->volumen30d);
        $tickerStructure->setSymbol1($symbol1);
        $tickerStructure->setSymbol2($symbol2);
     
        $this->ticker = $tickerStructure;
        
    }
    
    public function getTicker(): TickerStructure {
        return $this->ticker;
    }




    


}
