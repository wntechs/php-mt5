<?php

namespace Ram\WIK\Mt5Request;

class OrderHistoryRequest extends BaseRequest
{
    protected int $from;
    protected int $to;

    /**
     * @var string[]
     */
    protected array $logins;

    /**
     * @return int
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * @param int $from
     * @return OrderHistoryRequest
     */
    public function setFrom(int $from): OrderHistoryRequest
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
     * @return OrderHistoryRequest
     */
    public function setTo(int $to): OrderHistoryRequest
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLogins(): array
    {
        return $this->logins;
    }

    /**
     * @param string[] $logins
     * @return OrderHistoryRequest
     */
    public function setLogins(array $logins): OrderHistoryRequest
    {
        $this->logins = $logins;
        return $this;
    }


}
