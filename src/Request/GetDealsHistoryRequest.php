<?php

namespace Ram\WIK\Request;

class GetDealsHistoryRequest extends BaseRequest
{
    protected string $action = 'getdealshistory';
    protected int $from;
    protected int $to;
    /**
     * @var string[]
     */
    protected array $logins;

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
     * @return array
     */
    public function getLogins(): array
    {
        return $this->logins;
    }

    /**
     * @param array $logins
     * @return GetDealsHistoryRequest
     */
    public function setLogins(array $logins): GetDealsHistoryRequest
    {
        $this->logins = $logins;
        return $this;
    }



}
