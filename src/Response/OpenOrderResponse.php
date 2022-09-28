<?php

namespace Ram\WIK\Response;

class OpenOrderResponse extends BaseResponse
{
    protected string $orderid;

    /**
     * @return string
     */
    public function getOrderid(): string
    {
        return $this->orderid;
    }

    /**
     * @param string $orderid
     * @return OpenOrderResponse
     */
    public function setOrderid(string $orderid): OpenOrderResponse
    {
        $this->orderid = $orderid;
        return $this;
    }



}
