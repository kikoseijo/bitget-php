<?php

namespace Ksoft\Bitget\Api\SwapV3;

use Ksoft\Bitget\Request;

class Account extends Request
{
    public function getAccounts(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/account/accounts';
        $this->data=$data;
        return $this->exec();
    }

    public function getAccount(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/account/account';
        $this->data=$data;
        return $this->exec();
    }

    public function getSettings(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/account/settings';
        $this->data=$data;
        return $this->exec();
    }

    public function postLeverage(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/mix/v1/account/leverage';
        $this->data=$data;
        return $this->exec();
    }

    public function postAdjustMargin(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/mix/v1/account/adjustMargin';
        $this->data=$data;
        return $this->exec();
    }

    public function postModifyAutoAppendMargin(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/mix/v1/account/modifyAutoAppendMargin';
        $this->data=$data;
        return $this->exec();
    }
}
