<?php

namespace Ram\WIK\Response\GetAllBalances;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class GetBalanceScsvLine extends Arrayable
{
    use ScsvParser;

    private array $keys = ['login', 'balance'];
    protected string $login;
    protected float $balance;

    public function __construct(string $line)
    {
        $this->parseCsv($line);
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return GetBalanceScsvLine
     */
    public function setLogin(string $login): GetBalanceScsvLine
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
     * @return GetBalanceScsvLine
     */
    public function setBalance(float $balance): GetBalanceScsvLine
    {
        $this->balance = $balance;
        return $this;
    }


}
