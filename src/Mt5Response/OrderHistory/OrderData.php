<?php

namespace Ram\WIK\Mt5Response\OrderHistory;

use Ram\WIK\Arrayable;

class OrderData extends Arrayable
{
    /**
     * @var \Ram\WIK\Mt5Response\OrderHistory\Order[]
     */
    protected array $orders;

    /**
     * @return \Ram\WIK\Mt5Response\OrderHistory\Order[]
     */
    public function getOrders(): array
    {
        return $this->orders;
    }

    /**
     * @param \Ram\WIK\Mt5Response\OrderHistory\Order[] $orders
     * @return OrderData
     */
    public function setOrders(array $orders): OrderData
    {
        $this->orders = $orders;
        return $this;
    }


}
