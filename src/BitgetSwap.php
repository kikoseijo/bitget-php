<?php

namespace Ksoft\Bitget;

use Ksoft\Bitget\Api\SwapV3\Account;
use Ksoft\Bitget\Api\SwapV3\Market;
use Ksoft\Bitget\Api\SwapV3\Order;
use Ksoft\Bitget\Api\SwapV3\Position;
use Ksoft\Bitget\Api\SwapV3\Trace;

class BitgetSwap
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;

    protected $options=[];

    public function __construct(
        string $key = '',
        string $secret = '',
        string $passphrase = '',
        string $host='https://capi.bitget.com'
    )
    {
        $this->key = $key;
        $this->secret = $secret;
        $this->host = $host;
        $this->passphrase = $passphrase;
    }

    private function init()
    {
        return [
            'key' => $this->key,
            'secret' => $this->secret,
            'host' => $this->host,
            'passphrase' => $this->passphrase,
            'options' => $this->options,

            'platform' => 'swap',
            'version' => 'v3',
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

    public function market()
    {
        return new Market($this->init());
    }

    public function order()
    {
        return new Order($this->init());
    }

    public function position()
    {
        return new Position($this->init());
    }

    public function trace()
    {
        return new Trace($this->init());
    }
}
