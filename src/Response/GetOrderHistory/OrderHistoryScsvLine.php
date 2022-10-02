<?php

namespace Ram\WIK\Response\GetOrderHistory;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class OrderHistoryScsvLine extends Arrayable
{
    use ScsvParser;

    /**
    (Double)price_sl;(Double)price_tp;(Double)price_trigger;(UInt32)state;(Decimal)volume_initial;(Decimal)volume_current;(Int64)time_setup;(Int64)time_done;(Int64)time_expiration;(UInt32)type;(Double)contract_size;(UInt32)digits;(String)external_id;(UInt64)position_id;(UInt32)type_fill;(UInt32)type_time;(Double)margin_rate;(String)comment;(UInt32)activation_mode
     */
    private array $keys = ['login', 'order', 'symbol', 'activation_price', 'price_current', 'price_order', 'open_price',
        'price_sl', 'price_tp', 'price_trigger', 'state', 'volume_initial', 'volume_current', 'time_setup', 'time_done',
        'time_expiration', 'type', 'contract_size', 'digits', 'external_id', 'position_id', 'type_fill', 'type_time',
        'margin_rate', 'comment', 'activation_mode'];
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
     * @return OrderHistoryScsvLine
     */
    public function setLogin(string $login): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setOrder(string $order): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setSymbol(string $symbol): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setActivationPrice(float $activation_price): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setPriceCurrent(float $price_current): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setPriceOrder(float $price_order): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setOpenPrice(float $open_price): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setPriceSl(float $price_sl): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setPriceTp(float $price_tp): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setPriceTrigger(float $price_trigger): OrderHistoryScsvLine
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
     * @param int $state
     * @return OrderHistoryScsvLine
     */
    public function setState(float $state): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setVolumeInitial(string $volume_initial): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setVolumeCurrent(string $volume_current): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setTimeSetup(string $time_setup): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setTimeDone(string $time_done): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setTimeExpiration(string $time_expiration): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setType(int $type): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setContractSize(float $contract_size): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setDigits(int $digits): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setExternalId(string $external_id): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setPositionId(string $position_id): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setTypeFill(int $type_fill): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setTypeTime(int $type_time): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setMarginRate(float $margin_rate): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setComment(string $comment): OrderHistoryScsvLine
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
     * @return OrderHistoryScsvLine
     */
    public function setActivationMode(int $activation_mode): OrderHistoryScsvLine
    {
        $this->activation_mode = $activation_mode;
        return $this;
    }

}
