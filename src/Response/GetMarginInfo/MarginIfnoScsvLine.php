<?php

namespace Ram\WIK\Response\GetMarginInfo;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class MarginIfnoScsvLine extends Arrayable
{
    use ScsvParser;

    private array $keys = ['login', 'balance', 'credit', 'equity', 'margin', 'free_margin'];
    protected string $login;
    protected float $balance;
    protected float $credit;
    protected float $equity;
    protected float $margin;
    protected float $free_margin;

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
     * @return MarginIfnoScsvLine
     */
    public function setLogin(string $login): MarginIfnoScsvLine
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
     * @return MarginIfnoScsvLine
     */
    public function setBalance(float $balance): MarginIfnoScsvLine
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getCredit(): float
    {
        return $this->credit;
    }

    /**
     * @param float $credit
     * @return MarginIfnoScsvLine
     */
    public function setCredit(float $credit): MarginIfnoScsvLine
    {
        $this->credit = $credit;
        return $this;
    }

    /**
     * @return float
     */
    public function getEquity(): float
    {
        return $this->equity;
    }

    /**
     * @param float $equity
     * @return MarginIfnoScsvLine
     */
    public function setEquity(float $equity): MarginIfnoScsvLine
    {
        $this->equity = $equity;
        return $this;
    }

    /**
     * @return float
     */
    public function getMargin(): float
    {
        return $this->margin;
    }

    /**
     * @param float $margin
     * @return MarginIfnoScsvLine
     */
    public function setMargin(float $margin): MarginIfnoScsvLine
    {
        $this->margin = $margin;
        return $this;
    }

    /**
     * @return float
     */
    public function getFreeMargin(): float
    {
        return $this->free_margin;
    }

    /**
     * @param float $free_margin
     * @return MarginIfnoScsvLine
     */
    public function setFreeMargin(float $free_margin): MarginIfnoScsvLine
    {
        $this->free_margin = $free_margin;
        return $this;
    }


}
