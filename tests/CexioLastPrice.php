<?php

namespace CexioTests;
use PHPUnit\Framework\TestCase;
use \Cexio\CexioPublic;
use \Cexio\Responses\LastPrice;
use \Cexio\Structures\PriceStructure;
/**
 * 
 * Description of CexioLastPrice
 *
 * @author niko.peikrishvili
 */
class CexioLastPrice extends TestCase{
   
    /**
     * @test
     */
    public function is_response_instance_of_last_price()
    {
        $symbol1 = 'BTC';
        $symbol2 = 'USD';
        $response = CexioPublic::getLastPrice($symbol1, $symbol2);
        $this->assertInstanceOf(LastPrice::class,$response);
    }
    
    /**
     * @test
     */
    public function is_get_price_returns_price_structure()
    {
        $symbol1 = 'BTC';
        $symbol2 = 'USD';
        $response = CexioPublic::getLastPrice($symbol1, $symbol2);
        $this->assertInstanceOf(PriceStructure::class,$response->getPrice());
        $this->assertSame($symbol1,$response->getPrice()->getSymbol1());
        $this->assertSame($symbol2,$response->getPrice()->getSymbol2());
        
    }
}
