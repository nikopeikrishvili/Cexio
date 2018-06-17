<?php

namespace CexioTests;

use PHPUnit\Framework\TestCase;
use \Cexio\CexioPublic;
use Cexio\Error\SymbolNotFoundException;

/**
 * Description of CexioTickerTest
 *
 * @author niko.peikrishvili
 */
class CexioTickersTest extends TestCase {

    /**
     * @test
     */
    public function is_response_instanse_of_tickers() {
        $response = CexioPublic::getTickers('BTC', 'USD');
        $this->assertInstanceOf(\Cexio\Responses\Tickers::class, $response);
    }

    /**
     * @test
     */
    public function is_ticker_get_ticker_instance_of_ticker_strucure() {
        $symbol1 = 'BTC';
        $symbol2 = 'USD';
        $response = CexioPublic::getTickers($symbol1, $symbol2);
        $ticker = $response->getTicker($symbol1, $symbol2);
        $this->assertInstanceOf(\Cexio\Structures\TickerStructure::class, $ticker);
        $this->assertSame($symbol1, $ticker->getSymbol1());
        $this->assertSame($symbol2, $ticker->getSymbol2());
    }

    /**
     * @test
     */
    public function throws_symbol_not_fount_exception() {
        $this->expectException(SymbolNotFoundException::class);
        $symbol1 = 'BTC';
        $symbol2 = 'USD';
        $response = CexioPublic::getTickers($symbol1, $symbol2);

        $response->getTicker('BTC2', $symbol2);
    }

}
