<?php

namespace Ram\WIK\Mt5Response\DealHistory;

use Ram\WIK\Arrayable;

class Deal extends Arrayable
{
    protected string $login;
    protected string $deal;
    protected string $order;
    protected string $symbol;
    protected float $price;
    protected float $profit;
    protected float $commission;
    protected string $dealer;
    protected int $entry;
    protected string $volume;
    protected int $create_time;
    /**
     * @var int|null
     */
    protected ?int $setup_time;
    protected int $done_time;
    protected int $cmd;
    protected float $contract_size;
    protected int $digits;
    protected string $external_ID;
    protected string $position_ID;
    protected string $gateway;
    protected float $price_gateway;
    protected float $margin_rate;
    protected float $profit_raw;
    protected float $profit_rate;
    protected string $reason;
    protected float $swaps;
    protected string $comment;
    protected float $tick_size;
    protected float $tick_vlue;
    protected int $volume_ext;
    protected float $price_position;

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return Deal
     */
    public function setLogin(string $login): Deal
    {
        $this->login = $login;
        return $this;
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
     * @return Deal
     */
    public function setDeal(string $deal): Deal
    {
        $this->deal = $deal;
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
     * @return Deal
     */
    public function setOrder(string $order): Deal
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
     * @return Deal
     */
    public function setSymbol(string $symbol): Deal
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
     * @return Deal
     */
    public function setPrice(float $price): Deal
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
     * @return Deal
     */
    public function setProfit(float $profit): Deal
    {
        $this->profit = $profit;
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
     * @return Deal
     */
    public function setCommission(float $commission): Deal
    {
        $this->commission = $commission;
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
     * @return Deal
     */
    public function setDealer(string $dealer): Deal
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
     * @return Deal
     */
    public function setEntry(int $entry): Deal
    {
        $this->entry = $entry;
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
     * @return Deal
     */
    public function setVolume(string $volume): Deal
    {
        $this->volume = $volume;
        return $this;
    }



    /**
     * @return string|null
     */
    public function getSetupTime(): string|null
    {
        return $this->setup_time;
    }

    /**
     * @param int|null $setup_time
     * @return Deal
     */
    public function setSetupTime(int|null $setup_time): Deal
    {
        $this->setup_time = $setup_time;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreateTime(): int
    {
        return $this->create_time;
    }

    /**
     * @param int $create_time
     * @return Deal
     */
    public function setCreateTime(int $create_time): Deal
    {
        $this->create_time = $create_time;
        return $this;
    }

    /**
     * @return int
     */
    public function getDoneTime(): int
    {
        return $this->done_time;
    }

    /**
     * @param int $done_time
     * @return Deal
     */
    public function setDoneTime(int $done_time): Deal
    {
        $this->done_time = $done_time;
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
     * @return Deal
     */
    public function setCmd(int $cmd): Deal
    {
        $this->cmd = $cmd;
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
     * @return Deal
     */
    public function setContractSize(float $contract_size): Deal
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
     * @return Deal
     */
    public function setDigits(int $digits): Deal
    {
        $this->digits = $digits;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalID(): string
    {
        return $this->external_ID;
    }

    /**
     * @param string $external_ID
     * @return Deal
     */
    public function setExternalID(string $external_ID): Deal
    {
        $this->external_ID = $external_ID;
        return $this;
    }

    /**
     * @return string
     */
    public function getPositionID(): string
    {
        return $this->position_ID;
    }

    /**
     * @param string $position_ID
     * @return Deal
     */
    public function setPositionID(string $position_ID): Deal
    {
        $this->position_ID = $position_ID;
        return $this;
    }

    /**
     * @return string
     */
    public function getGateway(): string
    {
        return $this->gateway;
    }

    /**
     * @param string $gateway
     * @return Deal
     */
    public function setGateway(string $gateway): Deal
    {
        $this->gateway = $gateway;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceGateway(): float
    {
        return $this->price_gateway;
    }

    /**
     * @param float $price_gateway
     * @return Deal
     */
    public function setPriceGateway(float $price_gateway): Deal
    {
        $this->price_gateway = $price_gateway;
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
     * @return Deal
     */
    public function setMarginRate(float $margin_rate): Deal
    {
        $this->margin_rate = $margin_rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getProfitRaw(): float
    {
        return $this->profit_raw;
    }

    /**
     * @param float $profit_raw
     * @return Deal
     */
    public function setProfitRaw(float $profit_raw): Deal
    {
        $this->profit_raw = $profit_raw;
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
     * @return Deal
     */
    public function setProfitRate(float $profit_rate): Deal
    {
        $this->profit_rate = $profit_rate;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return Deal
     */
    public function setReason(string $reason): Deal
    {
        $this->reason = $reason;
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
     * @return Deal
     */
    public function setSwaps(float $swaps): Deal
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
     * @return Deal
     */
    public function setComment(string $comment): Deal
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return float
     */
    public function getTickSize(): float
    {
        return $this->tick_size;
    }

    /**
     * @param float $tick_size
     * @return Deal
     */
    public function setTickSize(float $tick_size): Deal
    {
        $this->tick_size = $tick_size;
        return $this;
    }

    /**
     * @return float
     */
    public function getTickVlue(): float
    {
        return $this->tick_vlue;
    }

    /**
     * @param float $tick_vlue
     * @return Deal
     */
    public function setTickVlue(float $tick_vlue): Deal
    {
        $this->tick_vlue = $tick_vlue;
        return $this;
    }

    /**
     * @return int
     */
    public function getVolumeExt(): int
    {
        return $this->volume_ext;
    }

    /**
     * @param int $volume_ext
     * @return Deal
     */
    public function setVolumeExt(int $volume_ext): Deal
    {
        $this->volume_ext = $volume_ext;
        return $this;
    }

    /**
     * @return float
     */
    public function getPricePosition(): float
    {
        return $this->price_position;
    }

    /**
     * @param float $price_position
     * @return Deal
     */
    public function setPricePosition(float $price_position): Deal
    {
        $this->price_position = $price_position;
        return $this;
    }


}
