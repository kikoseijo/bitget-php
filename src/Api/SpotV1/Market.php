<?php

namespace Ksoft\Bitget\Api\SpotV1;

use Ksoft\Bitget\Request;

class Market extends Request
{
    public function getHistoryKline(array $data=[])
    {
        $this->type='GET';
        $this->path='/data/v1/market/history/kline';
        $this->data=$data;
        return $this->exec();
    }

    public function getDetailMerged(array $data=[])
    {
        $this->type='GET';
        $this->path='/data/v1/market/detail/merged';
        $this->data=$data;
        return $this->exec();
    }

    public function getTickers(array $data=[])
    {
        $this->type='GET';
        $this->path='/data/v1/market/tickers';
        $this->data=$data;
        return $this->exec();
    }

    public function getAllTicker(array $data=[])
    {
        $this->type='GET';
        $this->path='/data/v1/market/allticker';
        $this->data=$data;
        return $this->exec();
    }

    public function getDepth(array $data=[])
    {
        $this->type='GET';
        $this->path='/data/v1/market/depth';
        $this->data=$data;
        return $this->exec();
    }

    public function getTrade(array $data=[])
    {
        $this->type='GET';
        $this->path='/data/v1/market/trade';
        $this->data=$data;
        return $this->exec();
    }

    public function getHistoryTrade(array $data=[])
    {
        $this->type='GET';
        $this->path='/data/v1/market/history/trade';
        $this->data=$data;
        return $this->exec();
    }

    public function getDetail(array $data=[])
    {
        $this->type='GET';
        $this->path='/data/v1/market/detail';
        $this->data=$data;
        return $this->exec();
    }


}
