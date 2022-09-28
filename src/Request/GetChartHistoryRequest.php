<?php

namespace Ram\WIK\Request;

class GetChartHistoryRequest extends BaseRequest
{
    protected string $action = 'getdealshistory';
    protected string $symbol;
    protected int $from;
    protected int $to;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return GetChartHistoryRequest
     */
    public function setAction(string $action): GetChartHistoryRequest
    {
        $this->action = $action;
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
     * @return GetChartHistoryRequest
     */
    public function setSymbol(string $symbol): GetChartHistoryRequest
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return int
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * @param int $from
     * @return GetChartHistoryRequest
     */
    public function setFrom(int $from): GetChartHistoryRequest
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return int
     */
    public function getTo(): int
    {
        return $this->to;
    }

    /**
     * @param int $to
     * @return GetChartHistoryRequest
     */
    public function setTo(int $to): GetChartHistoryRequest
    {
        $this->to = $to;
        return $this;
    }



}
