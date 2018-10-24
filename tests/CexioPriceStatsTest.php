<?php
namespace CexioTests;
use PHPUnit\Framework\TestCase;
use \Cexio\CexioPublic;
use \Cexio\Responses\PriceStats;
use \Cexio\Structures\PriceStatStructure;

/**
 * Description of CexioPriceStatsTest
 *
 * @author niko.peikrishvili
 */
class CexioPriceStatsTest extends TestCase{
    //put your code here
    
    /**
     * @test
     */
    public function is_response_instanse_of_price_stat()
    {
        $response = CexioPublic::getPriceStats('BTC', 'USD', 24, 100);
        $this->assertInstanceOf(PriceStats::class,$response);
    }
    /**
     * @test
     */
    public function is_get_price_stat_contains_only_price_stat_strucure()
    {
        $response = CexioPublic::getPriceStats('BTC', 'USD', 24, 100);
        $this->assertContainsOnlyInstancesOf(\Cexio\Structures\PriceStatStructure::class,$response->getPriceStats());
    }
    /**
     * @test
     */
    public function is_get_readable_date_correct()
    {
        $response = CexioPublic::getPriceStats('BTC', 'USD', 24, 100);
        $this->assertSame(date('Y-m-d H:i:s',$response->getPriceStats()[0]->getTimestamp()),$response->getPriceStats()[0]->getReadableDate());
    }
}
