<?php

namespace Ksoft\Bitget\Api\SpotV1;

use Ksoft\Bitget\Request;

class Order extends Request
{
    /**
     *POST /api/v1/order/orders/place
     * */
    public function postPlace(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/v1/order/orders/place';


        $data['method']='place';

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v1/order/orders/{order_id}/submitcancel
     * */
    public function postSubmitCancel(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/v1/order/orders/'.$data['order_id'].'/submitcancel';

        unset($data['order_id']);

        $data['method']='submitcancel';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v1/order/orders/batchcancel
     * */
    public function postBatchCancel(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/v1/order/orders/batchcancel';

        $data['method']='batchcancel';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v1/order/orders/{order_id}
     * */
    public function post(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/v1/order/orders/'.$data['order_id'];

        unset($data['order_id']);

        $data['method']='orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v1/order/orders/{order_id}/matchresults
     * */
    public function postOrderIdMatchresults(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/v1/order/orders/'.$data['order_id'].'/matchresults';

        unset($data['order_id']);

        $data['method']='matchresults';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v1/order/orders
     * */
    public function get(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/v1/order/orders';

        $data['method']='orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v1/order/orders/openOrders
     * */
    public function getOpenOrders(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/v1/order/orders/openOrders';

        $data['method']='openOrders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v1/order/orders/history
     * */
    public function getHistory(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/v1/order/orders/history';

        $data['method']='history';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /api/v1/order/matchresults
     * */
    public function postMatchresults(array $data=[])
    {
        $this->type='POST';
        $this->path='/api/v1/order/matchresults';

        $data['method']='matchresults';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /api/v1/order/deposit_withdraw
     * */
    public function getDepositWithdraw(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/v1/order/deposit_withdraw';

        $data['method']='deposit_withdraw';
        $this->data=$data;
        return $this->exec();
    }
}
