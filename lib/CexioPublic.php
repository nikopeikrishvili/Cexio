<?php

namespace Cexio;

use Cexio\Error\InvalidResponseException;
use Cexio\Error\CexioHttpException;

/**
 * CexioPublic is a class that providing cex.io API client functionality for
 * public methods
 *
 * @author niko.peikrishvili
 */
class CexioPublic {

    private static function __getClient() {
        return new \GuzzleHttp\Client();
    }

    private static function validateHttpResponseAndReturn($response, $endpont): \stdClass {
        if ($response->getStatusCode() != 200) {
            throw new CexioHttpException("Error while connecting to " . $endpont . " endpoint", $response->getStatusCode());
        }
        $responseObject = json_decode($response->getBody()->getContents());
        if (!$responseObject || (!$responseObject instanceof \stdClass && !is_array($responseObject))) {
            throw new InvalidResponseException("Cannot parse json from response");
        }

        return $responseObject;
    }
    private static function validateHttpResponseAndReturnArray($response, $endpont): Array {
        if ($response->getStatusCode() != 200) {
            throw new CexioHttpException("Error while connecting to " . $endpont . " endpoint", $response->getStatusCode());
        }
        $responseObject = json_decode($response->getBody()->getContents());
        if (!$responseObject || !is_array($responseObject)) {
            throw new InvalidResponseException("Cannot parse json from response");
        }

        return $responseObject;
    }

    /**
     * 
     * @return CurrencyLimit
     * @throws CexioHttpException
     * @throws InvalidResponseException
     */
    public static function getCurrencyLimit(): Responses\CurrencyLimit {
        $res = self::__getClient()->request('GET', Endpoints::currency_limit);
        $responseObject = self::validateHttpResponseAndReturn($res, Endpoints::currency_limit);
        return new Responses\CurrencyLimit($responseObject->data->pairs);
    }

    /**
     * 
     * @param type $symbol1
     * @param type $symbol2
     * @return \Cexio\Responses\Ticker
     */
    public static function getTicker($symbol1, $symbol2): Responses\Ticker {
        $res = self::__getClient()->request('GET', Endpoints::ticker . '/' . $symbol1 . '/' . $symbol2);
        $responseObject = self::validateHttpResponseAndReturn($res, Endpoints::ticker);
        return new Responses\Ticker($responseObject, $symbol1, $symbol2);
    }

    /**
     * 
     * @param type $symbol1
     * @param type $symbol2
     * @return \Cexio\Responses\Tickers
     */
    public static function getTickers($symbol1, $symbol2): Responses\Tickers {
        $res = self::__getClient()->request('GET', Endpoints::tickers . '/' . $symbol1 . '/' . $symbol2);
        $responseObject = self::validateHttpResponseAndReturn($res, Endpoints::tickers);
        return new Responses\Tickers($responseObject->data);
    }

    /**
     * 
     * @param type $symbol1
     * @param type $symbol2
     * @return \Cexio\Responses\LastPrice
     */
    public static function getLastPrice($symbol1, $symbol2): Responses\LastPrice {
        $res = self::__getClient()->request('GET', Endpoints::last_price . '/' . $symbol1 . '/' . $symbol2);
        $responseObject = self::validateHttpResponseAndReturn($res, Endpoints::last_price);
        return new Responses\LastPrice($responseObject);
    }

    /**
     * 
     * @param type $symbols
     * @return \Cexio\Responses\LastPrices
     */
    public static function getLastPrices(... $symbols): Responses\LastPrices {

        $res = self::__getClient()->request('GET', trim(Endpoints::last_prices . "/" . implode('/', $symbols), "/"));
        $responseObject = self::validateHttpResponseAndReturn($res, Endpoints::last_prices);
        return new Responses\LastPrices($responseObject->data);
    }

    /**
     * 
     * @param type $symbol1
     * @param type $symbol2
     * @param type $amount
     * @return \Cexio\Responses\Converter
     */
    public static function getConverter($symbol1, $symbol2, $amount): Responses\Converter {
        $res = self::__getClient()->request('POST', Endpoints::convert . '/' . $symbol1 . '/' . $symbol2, ['form_params' => ['amnt' => $amount]]);
        $responseObject = self::validateHttpResponseAndReturn($res, Endpoints::convert);
        return new Responses\Converter($responseObject, $symbol1, $symbol2);
    }

    /**
     * 
     * @param string $symbol1
     * @param string $symbol2
     * @param int $lastHour
     * @param int $maxRespArrSize
     * @return \Cexio\Responses\PriceStats
     */
    public static function getPriceStats(string $symbol1, string $symbol2, int $lastHour, int $maxRespArrSize): Responses\PriceStats {
        $res = self::__getClient()->request('POST', Endpoints::price_stats . '/' . $symbol1 . '/' . $symbol2, ['form_params' => 
            ['lastHours' => $lastHour,'maxRespArrSize'=>$maxRespArrSize]
        ]);
        $responseArray = self::validateHttpResponseAndReturnArray($res, Endpoints::price_stats);
        return new Responses\PriceStats($responseArray);
    }

}
