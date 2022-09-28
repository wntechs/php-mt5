<?php

namespace Ram\WIK\Response\GetBalancesOperations;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class BalanceOperationScsvLine  extends Arrayable
{
    use ScsvParser;

    private array $keys = ['deal', 'profit', 'open_time', 'comment'];
    protected string $deal;
    protected float $profit;
    protected string $open_time;
    protected string $comment;

    public function __construct(string $line)
    {
        $this->parseCsv($line);
    }

    /**
     * @return string
     */
    public function getDeal(): string
    {
        return $this->deal;
    }

    /**
     * @param string $deal
     * @return BalanceOperationScsvLine
     */
    public function setDeal(string $deal): BalanceOperationScsvLine
    {
        $this->deal = $deal;
        return $this;
    }

    /**
     * @return float
     */
    public function getProfit(): float
    {
        return $this->profit;
    }

    /**
     * @param float $profit
     * @return BalanceOperationScsvLine
     */
    public function setProfit(float $profit): BalanceOperationScsvLine
    {
        $this->profit = $profit;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenTime(): string
    {
        return $this->open_time;
    }

    /**
     * @param string $open_time
     * @return BalanceOperationScsvLine
     */
    public function setOpenTime(string $open_time): BalanceOperationScsvLine
    {
        $this->open_time = $open_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return BalanceOperationScsvLine
     */
    public function setComment(string $comment): BalanceOperationScsvLine
    {
        $this->comment = $comment;
        return $this;
    }


}
