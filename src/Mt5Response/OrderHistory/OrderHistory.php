<?php

namespace Ram\WIK\Mt5Response\OrderHistory;

use Ram\WIK\Mt5Response\BaseResponse;

class OrderHistory extends BaseResponse
{
    protected OrderData $Data;

    /**
     * @return \Ram\WIK\Mt5Response\OrderHistory\OrderData
     */
    public function getData(): OrderData
    {
        return $this->Data;
    }

    /**
     * @param \Ram\WIK\Mt5Response\OrderHistory\OrderData $Data
     * @return OrderHistory
     */
    public function setData(OrderData $Data): OrderHistory
    {
        $this->Data = $Data;
        return $this;
    }


}
