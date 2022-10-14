<?php

namespace Ram\WIK\Mt5Response\OrderHistory;

use Ram\WIK\Arrayable;

class Order extends Arrayable
{
    protected string $login;
    protected string $order;
    protected string $symbol;
    protected float $activation_price;
    protected float $price_current;
    protected float $price_order;
    protected float $open_price;
    protected float $price_sl;
    protected float $price_tp;
    protected float $price_trigger;
    protected float $state;
    protected string $volume_initial;
    protected string $volume_current;
    protected string $time_setup;
    protected string $time_done;
    protected string $time_expiration;
    protected int $type;
    protected float $contract_size;
    protected int $digits;
    protected string $external_id;
    protected string $position_id;
    protected int $type_fill;
    protected int $type_time;
    protected float $margin_rate;
    protected string $comment;
    protected int $activation_mode;

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return Order
     */
    public function setLogin(string $login): Order
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
     * @return Order
     */
    public function setOrder(string $order): Order
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
     * @return Order
     */
    public function setSymbol(string $symbol): Order
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return float
     */
    public function getActivationPrice(): float
    {
        return $this->activation_price;
    }

    /**
     * @param float $activation_price
     * @return Order
     */
    public function setActivationPrice(float $activation_price): Order
    {
        $this->activation_price = $activation_price;
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
     * @return Order
     */
    public function setPriceCurrent(float $price_current): Order
    {
        $this->price_current = $price_current;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceOrder(): float
    {
        return $this->price_order;
    }

    /**
     * @param float $price_order
     * @return Order
     */
    public function setPriceOrder(float $price_order): Order
    {
        $this->price_order = $price_order;
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
     * @return Order
     */
    public function setOpenPrice(float $open_price): Order
    {
        $this->open_price = $open_price;
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
     * @return Order
     */
    public function setPriceSl(float $price_sl): Order
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
     * @return Order
     */
    public function setPriceTp(float $price_tp): Order
    {
        $this->price_tp = $price_tp;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceTrigger(): float
    {
        return $this->price_trigger;
    }

    /**
     * @param float $price_trigger
     * @return Order
     */
    public function setPriceTrigger(float $price_trigger): Order
    {
        $this->price_trigger = $price_trigger;
        return $this;
    }

    /**
     * @return float
     */
    public function getState(): float
    {
        return $this->state;
    }

    /**
     * @param float $state
     * @return Order
     */
    public function setState(float $state): Order
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getVolumeInitial(): string
    {
        return $this->volume_initial;
    }

    /**
     * @param string $volume_initial
     * @return Order
     */
    public function setVolumeInitial(string $volume_initial): Order
    {
        $this->volume_initial = $volume_initial;
        return $this;
    }

    /**
     * @return string
     */
    public function getVolumeCurrent(): string
    {
        return $this->volume_current;
    }

    /**
     * @param string $volume_current
     * @return Order
     */
    public function setVolumeCurrent(string $volume_current): Order
    {
        $this->volume_current = $volume_current;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeSetup(): string
    {
        return $this->time_setup;
    }

    /**
     * @param string $time_setup
     * @return Order
     */
    public function setTimeSetup(string $time_setup): Order
    {
        $this->time_setup = $time_setup;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeDone(): string
    {
        return $this->time_done;
    }

    /**
     * @param string $time_done
     * @return Order
     */
    public function setTimeDone(string $time_done): Order
    {
        $this->time_done = $time_done;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeExpiration(): string
    {
        return $this->time_expiration;
    }

    /**
     * @param string $time_expiration
     * @return Order
     */
    public function setTimeExpiration(string $time_expiration): Order
    {
        $this->time_expiration = $time_expiration;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Order
     */
    public function setType(int $type): Order
    {
        $this->type = $type;
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
     * @return Order
     */
    public function setContractSize(float $contract_size): Order
    {
        $this->contract_size = $contract_size;
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
     * @return Order
     */
    public function setDigits(int $digits): Order
    {
        $this->digits = $digits;
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
     * @return Order
     */
    public function setExternalId(string $external_id): Order
    {
        $this->external_id = $external_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getPositionId(): string
    {
        return $this->position_id;
    }

    /**
     * @param string $position_id
     * @return Order
     */
    public function setPositionId(string $position_id): Order
    {
        $this->position_id = $position_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTypeFill(): int
    {
        return $this->type_fill;
    }

    /**
     * @param int $type_fill
     * @return Order
     */
    public function setTypeFill(int $type_fill): Order
    {
        $this->type_fill = $type_fill;
        return $this;
    }

    /**
     * @return int
     */
    public function getTypeTime(): int
    {
        return $this->type_time;
    }

    /**
     * @param int $type_time
     * @return Order
     */
    public function setTypeTime(int $type_time): Order
    {
        $this->type_time = $type_time;
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
     * @return Order
     */
    public function setMarginRate(float $margin_rate): Order
    {
        $this->margin_rate = $margin_rate;
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
     * @return Order
     */
    public function setComment(string $comment): Order
    {
        $this->comment = $comment;
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
     * @return Order
     */
    public function setActivationMode(int $activation_mode): Order
    {
        $this->activation_mode = $activation_mode;
        return $this;
    }


}
