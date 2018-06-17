<?php
namespace Cexio;
use Error\InvalidResponseException;
use Error\CexioHttpException;
/**
 * CexioPublic is a class that providing cex.io API client functionality for
 * public methods
 *
 * @author niko.peikrishvili
 */
class CexioPublic {
    
    /**
     * 
     * @return CurrencyLimit
     * @throws CexioHttpException
     * @throws InvalidResponseException
     */
    public static function getCurrencyLimit() : Responses\CurrencyLimit
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', Endpoints::currency_limit);
        if($res->getStatusCode()!= 200)
        {
            throw new CexioHttpException("Error while connecting to currency_limit endpoint",$res->getStatusCode());
        }
        $responseObject = json_decode($res->getBody()->getContents());
        if(!$responseObject || !$responseObject instanceof \stdClass)
        {
            throw new InvalidResponseException("Cannot parse json from response");
        }
        return new Responses\CurrencyLimit($responseObject->data->pairs);
    }
}
