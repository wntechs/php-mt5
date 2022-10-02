<?php

namespace Ram\WIK\Request;

class GetDealsHistoryRequest extends BaseRequest
{
    protected string $action = 'getdealshistory';
    protected int $from;
    protected int $to;
    protected string $logins;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
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
     * @return GetDealsHistoryRequest
     */
    public function setFrom(int $from): GetDealsHistoryRequest
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
     * @return GetDealsHistoryRequest
     */
    public function setTo(int $to): GetDealsHistoryRequest
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
     * @return GetDealsHistoryRequest
     */
    public function setLogins(string $logins): GetDealsHistoryRequest
    {
        $this->logins = $logins;
        return $this;
    }



}
