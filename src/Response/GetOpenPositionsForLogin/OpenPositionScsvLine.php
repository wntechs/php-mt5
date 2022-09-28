<?php

namespace Ram\WIK\Response\GetOpenPositionsForLogin;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class OpenPositionScsvLine extends Arrayable
{
    use ScsvParser;

    private array $keys = ['position', 'login', 'symbol', 'action', 'volume', 'open_time', 'open_price', 'sl', 'tp',
        'profit', 'swaps', 'comment'];
    protected string $position;
    protected string $login;
    protected string $symbol;
    protected string $volume;
    protected string $open_time;
    protected float $open_price;
    protected float $tp;
    protected float $profit;
    protected float $swaps;
    protected string $comment;

    public function __construct(string $line)
    {
        $this->parseCsv($line);
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     * @return OpenPositionScsvLine
     */
    public function setPosition(string $position): OpenPositionScsvLine
    {
        $this->position = $position;
        return $this;
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
     * @return OpenPositionScsvLine
     */
    public function setLogin(string $login): OpenPositionScsvLine
    {
        $this->login = $login;
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
     * @return OpenPositionScsvLine
     */
    public function setSymbol(string $symbol): OpenPositionScsvLine
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getVolume(): string
    {
        return $this->volume;
    }

    /**
     * @param string $volume
     * @return OpenPositionScsvLine
     */
    public function setVolume(string $volume): OpenPositionScsvLine
    {
        $this->volume = $volume;
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
     * @return OpenPositionScsvLine
     */
    public function setOpenTime(string $open_time): OpenPositionScsvLine
    {
        $this->open_time = $open_time;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpenPrice(): float
    {
        return $this->open_price;
    }

    /**
     * @param float $open_price
     * @return OpenPositionScsvLine
     */
    public function setOpenPrice(float $open_price): OpenPositionScsvLine
    {
        $this->open_price = $open_price;
        return $this;
    }

    /**
     * @return float
     */
    public function getTp(): float
    {
        return $this->tp;
    }

    /**
     * @param float $tp
     * @return OpenPositionScsvLine
     */
    public function setTp(float $tp): OpenPositionScsvLine
    {
        $this->tp = $tp;
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
     * @return OpenPositionScsvLine
     */
    public function setProfit(float $profit): OpenPositionScsvLine
    {
        $this->profit = $profit;
        return $this;
    }

    /**
     * @return float
     */
    public function getSwaps(): float
    {
        return $this->swaps;
    }

    /**
     * @param float $swaps
     * @return OpenPositionScsvLine
     */
    public function setSwaps(float $swaps): OpenPositionScsvLine
    {
        $this->swaps = $swaps;
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
     * @return OpenPositionScsvLine
     */
    public function setComment(string $comment): OpenPositionScsvLine
    {
        $this->comment = $comment;
        return $this;
    }



}
