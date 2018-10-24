<?php
namespace CexioTests;
use PHPUnit\Framework\TestCase;
use \Cexio\CexioPublic;
/**
 * Description of CexioConverterTest
 *
 * @author niko.peikrishvili
 */
class CexioConverterTest extends TestCase{
    
    /**
     * @test
     */
    public function is_response_instanceif_converter()
    {
        $response = CexioPublic::getConverter('BTC','USD',1);
        $this->assertInstanceOf(\Cexio\Responses\Converter::class,$response);
        $this->assertSame('BTC',$response->getConverted()->getSymbol1());
        $this->assertSame('USD',$response->getConverted()->getSymbol2());
    }
}
