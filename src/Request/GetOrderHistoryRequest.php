<?php

namespace Ram\WIK\Request;

class GetOrderHistoryRequest extends BaseRequest
{
    protected string $action = 'getordershistory';
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
     * @var string
     */
    protected string $logins;

    /**
     * @return int
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * @param int $from
     * @return GetOrderHistoryRequest
     */
    public function setFrom(int $from): GetOrderHistoryRequest
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
     * @return GetOrderHistoryRequest
     */
    public function setTo(int $to): GetOrderHistoryRequest
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogins(): string
    {
        return $this->logins;
    }

    /**
     * @param string $logins
     * @return GetOrderHistoryRequest
     */
    public function setLogins(string $logins): GetOrderHistoryRequest
    {

            $this->logins =  $logins;
        return $this;
    }



}
