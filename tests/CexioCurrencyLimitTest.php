<?php
namespace CexioTests;
use PHPUnit\Framework\TestCase;
use \Cexio\CexioPublic;
use \Cexio\Responses\CurrencyLimit;
use \Cexio\Error\SymbolNotFoundException;

/**
 * Description of CexioCurrencyLimit
 *
 * @author niko.peikrishvili
 */
class CexioCurrencyLimitTest extends TestCase{
    //put your code here
    /**
     * @test
     */
    public function is_response_instanceif_CurrencyLimit()
    {
        $response = CexioPublic::getCurrencyLimit();
        $this->assertInstanceOf(CurrencyLimit::class,$response);
    }
    
    /**
     * @test
     */
    public function get_valid_pair_object()
    {
        $response = CexioPublic::getCurrencyLimit();
        $symbol1 = 'BTC';
        $symbol2 = 'USD';
        $pair = $response->getLimit($symbol1,$symbol2);
        $this->assertInstanceOf(\Cexio\Structures\PairStructure::class,$pair);
        $this->assertSame($symbol1,$pair->getSymbol1());
        $this->assertSame($symbol2,$pair->getSymbol2());
    }
    /**
     * @test
     */
    public function throws_symbol_not_fount_exception()
    {
        $this->expectException(SymbolNotFoundException::class);
        $response = CexioPublic::getCurrencyLimit();
        $symbol1 = 'BTC2';
        $symbol2 = 'USD';
        $response->getLimit($symbol1,$symbol2);
    }
}
