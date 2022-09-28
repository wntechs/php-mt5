<?php

namespace Ram\WIK\Response\GetChartHistory;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class ChartHistoryScsvLine  extends Arrayable
{
    use ScsvParser;

    private array $keys = ['datetime', 'open', 'high', 'low', 'close', 'tick_volume', 'volume', 'spread'];
    protected string $datetime;
    protected float $open;
    protected float $high;
    protected float $low;
    protected float $close;
    protected string $tick_volume;
    protected string $volume;
    protected int $spread;


    public function __construct(string $line)
    {
        $this->parseCsv($line);
    }

    /**
     * @return string
     */
    public function getDatetime(): string
    {
        return $this->datetime;
    }

    /**
     * @param string $datetime
     * @return ChartHistoryScsvLine
     */
    public function setDatetime(string $datetime): ChartHistoryScsvLine
    {
        $this->datetime = $datetime;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpen(): float
    {
        return $this->open;
    }

    /**
     * @param float $open
     * @return ChartHistoryScsvLine
     */
    public function setOpen(float $open): ChartHistoryScsvLine
    {
        $this->open = $open;
        return $this;
    }

    /**
     * @return float
     */
    public function getHigh(): float
    {
        return $this->high;
    }

    /**
     * @param float $high
     * @return ChartHistoryScsvLine
     */
    public function setHigh(float $high): ChartHistoryScsvLine
    {
        $this->high = $high;
        return $this;
    }

    /**
     * @return float
     */
    public function getLow(): float
    {
        return $this->low;
    }

    /**
     * @param float $low
     * @return ChartHistoryScsvLine
     */
    public function setLow(float $low): ChartHistoryScsvLine
    {
        $this->low = $low;
        return $this;
    }

    /**
     * @return float
     */
    public function getClose(): float
    {
        return $this->close;
    }

    /**
     * @param float $close
     * @return ChartHistoryScsvLine
     */
    public function setClose(float $close): ChartHistoryScsvLine
    {
        $this->close = $close;
        return $this;
    }

    /**
     * @return string
     */
    public function getTickVolume(): string
    {
        return $this->tick_volume;
    }

    /**
     * @param string $tick_volume
     * @return ChartHistoryScsvLine
     */
    public function setTickVolume(string $tick_volume): ChartHistoryScsvLine
    {
        $this->tick_volume = $tick_volume;
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
     * @return ChartHistoryScsvLine
     */
    public function setVolume(string $volume): ChartHistoryScsvLine
    {
        $this->volume = $volume;
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
     * @return ChartHistoryScsvLine
     */
    public function setSpread(int $spread): ChartHistoryScsvLine
    {
        $this->spread = $spread;
        return $this;
    }


}
