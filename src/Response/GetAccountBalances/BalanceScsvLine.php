<?php

namespace Ram\WIK\Response\GetAccountBalances;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class BalanceScsvLine extends Arrayable
{
    use ScsvParser;

    private array $keys = ['login', 'balance'];

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
     * @return BalanceScsvLine
     */
    public function setLogin(int $login): BalanceScsvLine
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
     * @return BalanceScsvLine
     */
    public function setBalance(float $balance): BalanceScsvLine
    {
        $this->balance = $balance;
        return $this;
    }



}
