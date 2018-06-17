<?php

namespace CexioTests;
use PHPUnit\Framework\TestCase;
use \Cexio\CexioPublic;
/**
 * Description of CexioTickerTest
 *
 * @author niko.peikrishvili
 */
class CexioTickerTest extends TestCase{
    
    /**
     * @test
     */
    public function is_response_instanse_of_ticker()
    {
        $response = CexioPublic::getTicker('BTC', 'USD');
        $this->assertInstanceOf(\Cexio\Responses\Ticker::class,$response);
    }
    /**
     * @test
     */
    public function is_ticker_get_ticker_instance_of_ticker_strucure()
    {
        $response = CexioPublic::getTicker('BTC', 'USD');
        $this->assertInstanceOf(\Cexio\Structures\TickerStructure::class,$response->getTicker());
    }
}
