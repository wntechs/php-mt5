<?php

namespace Ram\WIK\Mt5Response\Balances;

use Ram\WIK\Arrayable;

class Balance extends Arrayable
{
    protected int $login;
    protected float $balance;

    /**
     * @return int
     */
    public function getLogin(): int
    {
        return $this->login;
    }

    /**
     * @param int $login
     * @return Balance
     */
    public function setLogin(int $login): Balance
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     * @return Balance
     */
    public function setBalance(float $balance): Balance
    {
        $this->balance = $balance;
        return $this;
    }



}
