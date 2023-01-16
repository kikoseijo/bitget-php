<?php

namespace Ksoft\Bitget\Api\SpotV1;

use Ksoft\Bitget\Request;

class Account extends Request
{
    /**
     *GET /api/v1/account/accounts
     * */
    public function get(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/v1/account/accounts';

        $data['method']='accounts';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v1/accounts/{account_id}/balance
     * */
    public function getBalance(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/v1/accounts/'.$data['account_id'].'/balance';
        unset($data['account_id']);

        $data['method']='balance';
        $this->data=$data;
        return $this->exec();
    }
}
