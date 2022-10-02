<?php

namespace Ram\WIK\Response;

class AccountHaveOrdersResponse extends BaseResponse
{
    protected int $orders = 0;
    protected int $login = 0;

    /**
     * @return int
     */
    public function getOrders(): int
    {
        return $this->orders;
    }

    /**
     * @param int $orders
     * @return AccountHaveOrdersResponse
     */
    public function setOrders(int $orders): AccountHaveOrdersResponse
    {
        $this->orders = $orders;
        return $this;
    }

    /**
     * @return int
     */
    public function getLogin(): int
    {
        return $this->login;
    }

    /**
     * @param int $login
     * @return AccountHaveOrdersResponse
     */
    public function setLogin(int $login): AccountHaveOrdersResponse
    {
        $this->login = $login;
        return $this;
    }



}
