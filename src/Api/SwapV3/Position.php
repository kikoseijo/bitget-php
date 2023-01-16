<?php

namespace Ksoft\Bitget\Api\SwapV3;

use Ksoft\Bitget\Request;

class Position extends Request
{
    public function getAllPosition(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/position/allPosition';
        $this->data=$data;
        return $this->exec();
    }

    public function getSinglePosition(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/position/singlePosition';
        $this->data=$data;
        return $this->exec();
    }

    public function postChangeHoldModel(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/mix/v1/position/changeHoldModel';
        $this->data=$data;
        return $this->exec();
    }
}
