<?php

namespace Cexio\Responses;
use \Cexio\Structures\OhlcStructure;
/**
 * Description of Ohlc
 *
 * @author niko.peikrishvili
 */
class Ohlc {
    protected $ohlc;
    public function __construct(\stdClass $ohlc) {
        $ohlcStructure = new OhlcStructure();
        $ohlcStructure->setTime($ohlc->time);
        $ohlcStructure->setDate1m($ohlc->date1m);
        $ohlcStructure->setDate1h($ohlc->date1h);
        $ohlcStructure->setDate1m($ohlc->date1m);
        $this->ohlc[] = $ohlcStructure;
    }
    
    public function getOhlc(): array
    {
        return $this->ohlc;
    }
}
