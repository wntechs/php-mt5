<?php

namespace Ram\WIK\Response\GetSymbols;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;


class SymbolScsvLine extends Arrayable
{
    use ScsvParser;

    private array $keys = ['symbol', 'digits', 'swapLong', 'swapShort', 'spread', 'tickSize', 'tickValue',
        'currencyMargin', 'contractSize', 'digits', 'point'];
    protected string $symbol;
    protected int $digits;
    protected string $swapLong;
    protected string $swapShort;
    protected int $spread;
    protected string $tickSize;
    protected string $tickValue;
    protected string $currencyMargin;
    protected string $contractSize;
    protected string $point;

    public function __construct(string $line)
    {
        $this->parseCsv($line);
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
     * @return SymbolScsvLine
     */
    public function setSymbol(string $symbol): SymbolScsvLine
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return int
     */
    public function getDigits(): int
    {
        return $this->digits;
    }

    /**
     * @param int $digits
     * @return SymbolScsvLine
     */
    public function setDigits(int $digits): SymbolScsvLine
    {
        $this->digits = $digits;
        return $this;
    }

    /**
     * @return string
     */
    public function getSwapLong(): string
    {
        return $this->swapLong;
    }

    /**
     * @param string $swapLong
     * @return SymbolScsvLine
     */
    public function setSwapLong(string $swapLong): SymbolScsvLine
    {
        $this->swapLong = $swapLong;
        return $this;
    }

    /**
     * @return string
     */
    public function getSwapShort(): string
    {
        return $this->swapShort;
    }

    /**
     * @param string $swapShort
     * @return SymbolScsvLine
     */
    public function setSwapShort(string $swapShort): SymbolScsvLine
    {
        $this->swapShort = $swapShort;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpread(): int
    {
        return $this->spread;
    }

    /**
     * @param int $spread
     * @return SymbolScsvLine
     */
    public function setSpread(int $spread): SymbolScsvLine
    {
        $this->spread = $spread;
        return $this;
    }

    /**
     * @return string
     */
    public function getTickSize(): string
    {
        return $this->tickSize;
    }

    /**
     * @param string $tickSize
     * @return SymbolScsvLine
     */
    public function setTickSize(string $tickSize): SymbolScsvLine
    {
        $this->tickSize = $tickSize;
        return $this;
    }

    /**
     * @return string
     */
    public function getTickValue(): string
    {
        return $this->tickValue;
    }

    /**
     * @param string $tickValue
     * @return SymbolScsvLine
     */
    public function setTickValue(string $tickValue): SymbolScsvLine
    {
        $this->tickValue = $tickValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyMargin(): string
    {
        return $this->currencyMargin;
    }

    /**
     * @param string $currencyMargin
     * @return SymbolScsvLine
     */
    public function setCurrencyMargin(string $currencyMargin): SymbolScsvLine
    {
        $this->currencyMargin = $currencyMargin;
        return $this;
    }

    /**
     * @return string
     */
    public function getContractSize(): string
    {
        return $this->contractSize;
    }

    /**
     * @param string $contractSize
     * @return SymbolScsvLine
     */
    public function setContractSize(string $contractSize): SymbolScsvLine
    {
        $this->contractSize = $contractSize;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoint(): string
    {
        return $this->point;
    }

    /**
     * @param string $point
     * @return SymbolScsvLine
     */
    public function setPoint(string $point): SymbolScsvLine
    {
        $this->point = $point;
        return $this;
    }


}
