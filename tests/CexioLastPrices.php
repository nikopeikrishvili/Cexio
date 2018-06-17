<?php

namespace CexioTests;
use PHPUnit\Framework\TestCase;
use \Cexio\CexioPublic;
use \Cexio\Responses\LastPrices;
use \Cexio\Structures\PriceStructure;
use \Cexio\Error\SymbolNotFoundException;
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
    public function is_response_instance_of_last_prices()
    {
        $symbol1 = 'BTC';
        $symbol2 = 'USD';
        $response = CexioPublic::getLastPrices($symbol1, $symbol2);
        $this->assertInstanceOf(LastPrices::class,$response);
    }
    
    /**
     * @test
     */
    public function is_get_price_returns_price_structure()
    {
        $symbol1 = 'BTC';
        $symbol2 = 'USD';
        $response = CexioPublic::getLastPrices($symbol1, $symbol2);
        $lastPrice = $response->getPrice($symbol1,$symbol2);
        $this->assertInstanceOf(PriceStructure::class,$lastPrice);
        $this->assertSame($symbol1,$lastPrice->getSymbol1());
        $this->assertSame($symbol2,$lastPrice->getSymbol2());
        
    }
    /**
     * @test
     */
    public function throws_symbol_not_fount_exception() {
        $this->expectException(SymbolNotFoundException::class);
        $symbol1 = 'BTC';
        $symbol2 = 'USD';
        $response = CexioPublic::getLastPrices($symbol1, $symbol2);
        $response->getPrice($symbol1,'ZZZ');
    }
}
