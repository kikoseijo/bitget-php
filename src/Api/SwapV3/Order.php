<?php

namespace Ksoft\Bitget\Api\SwapV3;

use Ksoft\Bitget\Request;

class Order extends Request
{
    public function postPlaceOrder(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/mix/v1/order/placeOrder';
        $this->data=$data;
        return $this->exec();
    }

    public function postBatchOrders(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/mix/v1/order/batchOrders';
        $this->data=$data;
        return $this->exec();
    }

    public function postCancelOrder(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/mix/v1/order/cancel_order';
        $this->data=$data;
        return $this->exec();
    }

    public function postCancelBatchOrders(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/mix/v1/order/cancel_batch_orders';
        $this->data=$data;
        return $this->exec();
    }

    public function getDetail(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/order/detail';
        $this->data=$data;
        return $this->exec();
    }

    public function getMarginCoinHistory(array $data=[])
    {
        $this->type = 'GET';
        $this->path = '/api/mix/v1/order/marginCoinCurrent';
        $this->data = $data;

        return $this->exec();
    }

    public function getHistory(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/order/history';
        $this->data=$data;
        return $this->exec();
    }

    public function getProductHistory(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/order/historyProductType';
        $this->data=$data;
        return $this->exec();
    }

    public function getCurrent(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/order/current';
        $this->data=$data;
        return $this->exec();
    }

    public function getFills(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/order/fills';
        $this->data=$data;
        return $this->exec();
    }

    public function postPlanOrder(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/mix/v1/order/plan_order';
        $this->data=$data;
        return $this->exec();
    }

    public function postCancelPlan(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/mix/v1/order/cancel_plan';
        $this->data=$data;
        return $this->exec();
    }

    public function getCurrentPlan(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/order/currentPlan';
        $this->data=$data;
        return $this->exec();
    }

    public function getHistoryPlan(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/mix/v1/order/historyPlan';
        $this->data=$data;
        return $this->exec();
    }

    public function placePositionsTPSL(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/mix/v1/plan/placePositionsTPSL';
        $this->data=$data;
        return $this->exec();
    }
}
