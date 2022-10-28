<?php

namespace Ram\WIK\Mt5Response\Positions;

use Ram\WIK\Arrayable;

class PositionItem extends Arrayable
{
    protected int $position;
    protected int $login;
    protected string $symbol;
    protected int $volume;
    protected int $open_time;
    protected float $price_open;
    protected float $price_current;
    protected float $price_sl;
    protected float $price_tp;
    protected float $profit;
    protected float $storage;
    protected float $contract_size;
    protected float $margin_rate;
    protected int $digits;
    protected int $action;
    protected int $activation_mode;
    protected string $external_id;
    protected string $comment;

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     * @return PositionItem
     */
    public function setPosition(int $position): PositionItem
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return int
     */
    public function getLogin(): int
    {
        return $this->login;
    }

    /**
     * @param int $login
     * @return PositionItem
     */
    public function setLogin(int $login): PositionItem
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
     * @return PositionItem
     */
    public function setSymbol(string $symbol): PositionItem
    {
        $this->symbol = $symbol;
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
     * @return PositionItem
     */
    public function setVolume(int $volume): PositionItem
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpenTime(): int
    {
        return $this->open_time;
    }

    /**
     * @param int $open_time
     * @return PositionItem
     */
    public function setOpenTime(int $open_time): PositionItem
    {
        $this->open_time = $open_time;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceOpen(): float
    {
        return $this->price_open;
    }

    /**
     * @param float $price_open
     * @return PositionItem
     */
    public function setPriceOpen(float $price_open): PositionItem
    {
        $this->price_open = $price_open;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceCurrent(): float
    {
        return $this->price_current;
    }

    /**
     * @param float $price_current
     * @return PositionItem
     */
    public function setPriceCurrent(float $price_current): PositionItem
    {
        $this->price_current = $price_current;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceSl(): float
    {
        return $this->price_sl;
    }

    /**
     * @param float $price_sl
     * @return PositionItem
     */
    public function setPriceSl(float $price_sl): PositionItem
    {
        $this->price_sl = $price_sl;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceTp(): float
    {
        return $this->price_tp;
    }

    /**
     * @param float $price_tp
     * @return PositionItem
     */
    public function setPriceTp(float $price_tp): PositionItem
    {
        $this->price_tp = $price_tp;
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
     * @return PositionItem
     */
    public function setProfit(float $profit): PositionItem
    {
        $this->profit = $profit;
        return $this;
    }

    /**
     * @return float
     */
    public function getStorage(): float
    {
        return $this->storage;
    }

    /**
     * @param float $storage
     * @return PositionItem
     */
    public function setStorage(float $storage): PositionItem
    {
        $this->storage = $storage;
        return $this;
    }

    /**
     * @return float
     */
    public function getContractSize(): float
    {
        return $this->contract_size;
    }

    /**
     * @param float $contract_size
     * @return PositionItem
     */
    public function setContractSize(float $contract_size): PositionItem
    {
        $this->contract_size = $contract_size;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarginRate(): float
    {
        return $this->margin_rate;
    }

    /**
     * @param float $margin_rate
     * @return PositionItem
     */
    public function setMarginRate(float $margin_rate): PositionItem
    {
        $this->margin_rate = $margin_rate;
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
     * @return PositionItem
     */
    public function setDigits(int $digits): PositionItem
    {
        $this->digits = $digits;
        return $this;
    }

    /**
     * @return int
     */
    public function getAction(): int
    {
        return $this->action;
    }

    /**
     * @param int $action
     * @return PositionItem
     */
    public function setAction(int $action): PositionItem
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivationMode(): int
    {
        return $this->activation_mode;
    }

    /**
     * @param int $activation_mode
     * @return PositionItem
     */
    public function setActivationMode(int $activation_mode): PositionItem
    {
        $this->activation_mode = $activation_mode;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->external_id;
    }

    /**
     * @param string $external_id
     * @return PositionItem
     */
    public function setExternalId(string $external_id): PositionItem
    {
        $this->external_id = $external_id;
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
     * @return PositionItem
     */
    public function setComment(string $comment): PositionItem
    {
        $this->comment = $comment;
        return $this;
    }



}
