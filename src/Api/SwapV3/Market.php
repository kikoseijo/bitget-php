<?php

namespace Ksoft\Bitget\Api\SwapV3;

use Ksoft\Bitget\Request;

class Market extends Request
{
    public function getTime(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/time';
        $this->data=$data;
        return $this->exec();
    }

    public function getContracts(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/contracts';
        $this->data=$data;
        return $this->exec();
    }

    public function getDepth(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/depth';
        $this->data=$data;
        return $this->exec();
    }

    public function getTickers(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/tickers';
        $this->data=$data;
        return $this->exec();
    }

    public function getTicker(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/ticker';
        $this->data=$data;
        return $this->exec();
    }

    public function getTrades(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/trades';
        $this->data=$data;
        return $this->exec();
    }

    public function getCandles(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/candles';
        $this->data=$data;
        return $this->exec();
    }

    public function getIndex(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/index';
        $this->data=$data;
        return $this->exec();
    }

    public function getOpenInterest(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/open_interest';
        $this->data=$data;
        return $this->exec();
    }

    public function getPriceLimit(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/price_limit';
        $this->data=$data;
        return $this->exec();
    }

    public function getFundingTime(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/funding_time';
        $this->data=$data;
        return $this->exec();
    }

    public function getHistoryFundRate(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/historyFundRate';
        $this->data=$data;
        return $this->exec();
    }

    public function getMarkPrice(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/mark-price';
        $this->data=$data;
        return $this->exec();
    }

    public function getOpenCount(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/open_count';
        $this->data=$data;
        return $this->exec();
    }

    public function getSymbolLeverage(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/market/symbol-leverage';
        $this->data=$data;
        return $this->exec();
    }
}
