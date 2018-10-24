<?php

namespace Cexio\Responses;

use \Cexio\Structures\ConvertStructure;

/**
 * Description of Converter
 *
 * @author niko.peikrishvili
 */
class Converter {

    protected $converter;

    public function __construct(\stdClass $converter, string $symbol1, string $symbol2) {
        $converterStructure = new ConvertStructure();
        $converterStructure->setSymbol1($symbol1);
        $converterStructure->setSymbol2($symbol2);
        $converterStructure->setAmount($converter->amnt);
        $this->converter = $converterStructure;
    }

    public function getConverted(): ConvertStructure {
        return $this->converter;
    }

}
