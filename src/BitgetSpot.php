<?php

namespace Ksoft\Bitget;

use Ksoft\Bitget\Api\SpotV1\Account;
use Ksoft\Bitget\Api\SpotV1\Common;
use Ksoft\Bitget\Api\SpotV1\Market;
use Ksoft\Bitget\Api\SpotV1\Order;

class BitgetSpot
{
    protected $key;
    protected $secret;
    protected $host;

    protected $options=[];

    public function __construct(
        string $key = '',
        string $secret = '',
        string $host = 'https://api.bitget.com'
    )
    {
        $this->key = $key;
        $this->secret = $secret;
        $this->host = $host;
    }

    private function init()
    {
        return [
            'key' => $this->key,
            'secret' => $this->secret,
            'host' => $this->host,
            'options' => $this->options,
            'platform' => 'spot',
            'version' => 'v1',
        ];
    }

    public function setOptions(array $options=[])
    {
        $this->options = $options;
    }

    public function account()
    {
        return new Account($this->init());
    }

    public function common()
    {
        return new Common($this->init());
    }

    public function market()
    {
        return new Market($this->init());
    }

    public function order()
    {
        return new Order($this->init());
    }
}
