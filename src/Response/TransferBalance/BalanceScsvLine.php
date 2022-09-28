<?php

namespace Ram\WIK\Response\TransferBalance;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class BalanceScsvLine extends Arrayable
{
    use ScsvParser;

    private array $keys = ['login', 'balance', 'credit', 'equity', 'margin', 'margin_free', 'success_flag'];
    protected string $login;
    protected float $balance;
    protected float $credit;
    protected float $equity;
    protected float $margin;
    protected float $margin_free;
    protected float $success_flag;

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
     * @return BalanceScsvLine
     */
    public function setLogin(string $login): BalanceScsvLine
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

    /**
     * @return float
     */
    public function getCredit(): float
    {
        return $this->credit;
    }

    /**
     * @param float $credit
     * @return BalanceScsvLine
     */
    public function setCredit(float $credit): BalanceScsvLine
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
     * @return BalanceScsvLine
     */
    public function setEquity(float $equity): BalanceScsvLine
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
     * @return BalanceScsvLine
     */
    public function setMargin(float $margin): BalanceScsvLine
    {
        $this->margin = $margin;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarginFree(): float
    {
        return $this->margin_free;
    }

    /**
     * @param float $margin_free
     * @return BalanceScsvLine
     */
    public function setMarginFree(float $margin_free): BalanceScsvLine
    {
        $this->margin_free = $margin_free;
        return $this;
    }

    /**
     * @return float
     */
    public function getSuccessFlag(): float
    {
        return $this->success_flag;
    }

    /**
     * @param float $success_flag
     * @return BalanceScsvLine
     */
    public function setSuccessFlag(float $success_flag): BalanceScsvLine
    {
        $this->success_flag = $success_flag;
        return $this;
    }

}
