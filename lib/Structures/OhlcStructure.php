<?php

namespace Cexio\Structures;

/**
 * Description of OhlcStructure
 *
 * @author niko.peikrishvili
 */
class OhlcStructure {

    protected $time;
    protected $date1m;
    protected $date1h;
    protected $date1d;

    public function getTime() {
        return $this->time;
    }

    public function getDate1m() {
        return $this->date1m;
    }

    public function getDate1h() {
        return $this->date1h;
    }

    public function getDate1d() {
        return $this->date1d;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function setDate1m(array $date1m) {
        foreach ($date1m as $ohlc) {
            $ohlcItemStructure = new OhlcItemStructure();
            $ohlcItemStructure->setTimestamp($ohlc[0]);
            $ohlcItemStructure->setOpen($ohlc[1]);
            $ohlcItemStructure->setHigh($ohlc[2]);
            $ohlcItemStructure->setLow($ohlc[3]);
            $ohlcItemStructure->setClose($ohlc[4]);
            $ohlcItemStructure->setVolume($ohlc[5]);
            $this->date1m[] = $ohlcItemStructure;
        }
    }

    public function setDate1h(array $date1h) {
        foreach ($date1h as $ohlc) {
            $ohlcItemStructure = new OhlcItemStructure();
            $ohlcItemStructure->setTimestamp($ohlc[0]);
            $ohlcItemStructure->setOpen($ohlc[1]);
            $ohlcItemStructure->setHigh($ohlc[2]);
            $ohlcItemStructure->setLow($ohlc[3]);
            $ohlcItemStructure->setClose($ohlc[4]);
            $ohlcItemStructure->setVolume($ohlc[5]);
            $this->date1h[] = $ohlcItemStructure;
        }
    }

    public function setDate1d(array $date1d) {
        foreach ($date1d as $ohlc) {
            $ohlcItemStructure = new OhlcItemStructure();
            $ohlcItemStructure->setTimestamp($ohlc[0]);
            $ohlcItemStructure->setOpen($ohlc[1]);
            $ohlcItemStructure->setHigh($ohlc[2]);
            $ohlcItemStructure->setLow($ohlc[3]);
            $ohlcItemStructure->setClose($ohlc[4]);
            $ohlcItemStructure->setVolume($ohlc[5]);
            $this->date1d[] = $ohlcItemStructure;
        }
    }

}
