<?php

namespace Ram\WIK\Response\GetDealsHistory;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class DealHistoryScsvLine  extends Arrayable
{
    use ScsvParser;

    private array $keys = ['login', 'deal', 'order', 'symbol', 'price', 'profit', 'commission', 'dealer', 'entry',
        'volume', 'create_time', 'setup_time', 'done_time', 'cmd', 'contract_size', 'digits', 'external_ID',
        'position_ID', 'gateway', 'price_gateway', 'margin_rate', 'profit_raw', 'profit_rate', 'reason', 'swaps',
        'comment', 'tick_size', 'tick_vlue'];
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
    protected string $create_time;
    protected string $setup_time;
    protected string $done_time;
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
    protected int $reason;
    protected float $swaps;
    protected string $comment;
    protected float $tick_size;
    protected float $tick_vlue;

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
     * @return DealHistoryScsvLine
     */
    public function setLogin(string $login): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setDeal(string $deal): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setOrder(string $order): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setSymbol(string $symbol): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setPrice(float $price): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setProfit(float $profit): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setCommission(float $commission): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setDealer(string $dealer): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setEntry(int $entry): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setVolume(string $volume): DealHistoryScsvLine
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): string
    {
        return $this->create_time;
    }

    /**
     * @param string $create_time
     * @return DealHistoryScsvLine
     */
    public function setCreateTime(string $create_time): DealHistoryScsvLine
    {
        $this->create_time = $create_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getSetupTime(): string
    {
        return $this->setup_time;
    }

    /**
     * @param string $setup_time
     * @return DealHistoryScsvLine
     */
    public function setSetupTime(string $setup_time): DealHistoryScsvLine
    {
        $this->setup_time = $setup_time;
        return $this;
    }

    /**
     * @return string
     */
    public function getDoneTime(): string
    {
        return $this->done_time;
    }

    /**
     * @param string $done_time
     * @return DealHistoryScsvLine
     */
    public function setDoneTime(string $done_time): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setCmd(int $cmd): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setContractSize(float $contract_size): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setDigits(int $digits): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setExternalID(string $external_ID): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setPositionID(string $position_ID): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setGateway(string $gateway): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setPriceGateway(float $price_gateway): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setMarginRate(float $margin_rate): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setProfitRaw(float $profit_raw): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setProfitRate(float $profit_rate): DealHistoryScsvLine
    {
        $this->profit_rate = $profit_rate;
        return $this;
    }

    /**
     * @return int
     */
    public function getReason(): int
    {
        return $this->reason;
    }

    /**
     * @param int $reason
     * @return DealHistoryScsvLine
     */
    public function setReason(int $reason): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setSwaps(float $swaps): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setComment(string $comment): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setTickSize(float $tick_size): DealHistoryScsvLine
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
     * @return DealHistoryScsvLine
     */
    public function setTickVlue(float $tick_vlue): DealHistoryScsvLine
    {
        $this->tick_vlue = $tick_vlue;
        return $this;
    }


}
