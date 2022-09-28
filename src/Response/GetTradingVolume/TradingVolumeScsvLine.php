<?php

namespace Ram\WIK\Response\GetTradingVolume;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class TradingVolumeScsvLine extends Arrayable
{
    use ScsvParser;

    private array $keys = ['login', 'order', 'symbol', 'price', 'profit', 'dealer', 'entry',
        'volume', 'comment', 'commission', 'profit_rate'];
    protected string $login;
    protected string $order;
    protected string $symbol;
    protected float $price;
    protected float $profit;
    protected string $dealer;
    protected int $entry;
    protected int $volume;
    protected string $comment;
    protected float $commission;
    protected float $profit_rate;

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
     * @return TradingVolumeScsvLine
     */
    public function setLogin(string $login): TradingVolumeScsvLine
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrder(): string
    {
        return $this->order;
    }

    /**
     * @param string $order
     * @return TradingVolumeScsvLine
     */
    public function setOrder(string $order): TradingVolumeScsvLine
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return TradingVolumeScsvLine
     */
    public function setSymbol(string $symbol): TradingVolumeScsvLine
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return TradingVolumeScsvLine
     */
    public function setPrice(float $price): TradingVolumeScsvLine
    {
        $this->price = $price;
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
     * @return TradingVolumeScsvLine
     */
    public function setProfit(float $profit): TradingVolumeScsvLine
    {
        $this->profit = $profit;
        return $this;
    }

    /**
     * @return string
     */
    public function getDealer(): string
    {
        return $this->dealer;
    }

    /**
     * @param string $dealer
     * @return TradingVolumeScsvLine
     */
    public function setDealer(string $dealer): TradingVolumeScsvLine
    {
        $this->dealer = $dealer;
        return $this;
    }

    /**
     * @return int
     */
    public function getEntry(): int
    {
        return $this->entry;
    }

    /**
     * @param int $entry
     * @return TradingVolumeScsvLine
     */
    public function setEntry(int $entry): TradingVolumeScsvLine
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * @return int
     */
    public function getVolume(): int
    {
        return $this->volume;
    }

    /**
     * @param int $volume
     * @return TradingVolumeScsvLine
     */
    public function setVolume(int $volume): TradingVolumeScsvLine
    {
        $this->volume = $volume;
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
     * @return TradingVolumeScsvLine
     */
    public function setComment(string $comment): TradingVolumeScsvLine
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return float
     */
    public function getCommission(): float
    {
        return $this->commission;
    }

    /**
     * @param float $commission
     * @return TradingVolumeScsvLine
     */
    public function setCommission(float $commission): TradingVolumeScsvLine
    {
        $this->commission = $commission;
        return $this;
    }

    /**
     * @return float
     */
    public function getProfitRate(): float
    {
        return $this->profit_rate;
    }

    /**
     * @param float $profit_rate
     * @return TradingVolumeScsvLine
     */
    public function setProfitRate(float $profit_rate): TradingVolumeScsvLine
    {
        $this->profit_rate = $profit_rate;
        return $this;
    }



}
