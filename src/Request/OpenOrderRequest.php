<?php

namespace Ram\WIK\Request;

class OpenOrderRequest extends BaseRequest
{
    protected string $action = 'openorder';

    protected string $login;
    protected string $symbol;
    protected int $cmd;
    protected string $volume;

    protected float $sl;
    protected float $tp;
    protected string $comment;
    protected float $triggered_price;
    protected float $price;

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
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return OpenOrderRequest
     */
    public function setLogin(string $login): OpenOrderRequest
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
     * @return OpenOrderRequest
     */
    public function setSymbol(string $symbol): OpenOrderRequest
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return int
     */
    public function getCmd(): int
    {
        return $this->cmd;
    }

    /**
     * @param int $cmd
     * @return OpenOrderRequest
     */
    public function setCmd(int $cmd): OpenOrderRequest
    {
        $this->cmd = $cmd;
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
     * @return OpenOrderRequest
     */
    public function setVolume(string $volume): OpenOrderRequest
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return float
     */
    public function getSl(): float
    {
        return $this->sl;
    }

    /**
     * @param float $sl
     * @return OpenOrderRequest
     */
    public function setSl(float $sl): OpenOrderRequest
    {
        $this->sl = $sl;
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
     * @return OpenOrderRequest
     */
    public function setTp(float $tp): OpenOrderRequest
    {
        $this->tp = $tp;
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
     * @return OpenOrderRequest
     */
    public function setComment(string $comment): OpenOrderRequest
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return float
     */
    public function getTriggeredPrice(): float
    {
        return $this->triggered_price;
    }

    /**
     * @param float $triggered_price
     * @return OpenOrderRequest
     */
    public function setTriggeredPrice(float $triggered_price): OpenOrderRequest
    {
        $this->triggered_price = $triggered_price;
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
     * @return OpenOrderRequest
     */
    public function setPrice(float $price): OpenOrderRequest
    {
        $this->price = $price;
        return $this;
    }



}
