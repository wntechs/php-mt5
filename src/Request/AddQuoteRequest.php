<?php

namespace Ram\WIK\Request;

class AddQuoteRequest extends BaseRequest
{
    protected string $action = 'addquote';
    protected string $symbol;
    protected float $bid;
    protected float $ask;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
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
     * @return AddQuoteRequest
     */
    public function setSymbol(string $symbol): AddQuoteRequest
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return float
     */
    public function getBid(): float
    {
        return $this->bid;
    }

    /**
     * @param float $bid
     * @return AddQuoteRequest
     */
    public function setBid(float $bid): AddQuoteRequest
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return float
     */
    public function getAsk(): float
    {
        return $this->ask;
    }

    /**
     * @param float $ask
     * @return AddQuoteRequest
     */
    public function setAsk(float $ask): AddQuoteRequest
    {
        $this->ask = $ask;
        return $this;
    }


}
