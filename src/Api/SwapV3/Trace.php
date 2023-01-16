<?php

namespace Ksoft\Bitget\Api\SwapV3;

use Ksoft\Bitget\Request;

class Trace extends Request
{
    public function postCloseTrackOrder(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/mix/v1/trace/closeTrackOrder';
        $this->data=$data;
        return $this->exec();
    }

    public function getCurrentTrack(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/trace/currentTrack';
        $this->data=$data;
        return $this->exec();
    }

    public function getHistoryTrack(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/trace/historyTrack';
        $this->data=$data;
        return $this->exec();
    }
}
