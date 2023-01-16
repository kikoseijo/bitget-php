<?php

namespace Ksoft\Bitget\Api\SpotV1;

use Ksoft\Bitget\Request;

class Common extends Request
{
    /**
     *GET /data/v1/common/symbols
     * */
    public function getSymbols(array $data=[])
    {
        $this->type='GET';
        $this->path='/data/v1/common/symbols ';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/common/currencys
     * */
    public function getCurrencys(array $data=[])
    {
        $this->type='GET';
        $this->path='/data/v1/common/currencys';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/common/currencysDetail
     * */
    public function getCurrencysDetail(array $data=[])
    {
        $this->type='GET';
        $this->path='/data/v1/common/currencysDetail';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /data/v1/common/timestamp
     * */
    public function getTimestamp(array $data=[])
    {
        $this->type='GET';
        $this->path='/data/v1/common/timestamp';
        $this->data=$data;
        return $this->exec();
    }
}
