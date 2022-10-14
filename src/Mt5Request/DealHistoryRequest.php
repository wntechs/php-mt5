<?php

namespace Ram\WIK\Mt5Request;

class DealHistoryRequest extends BaseRequest
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
     * @return DealHistoryRequest
     */
    public function setFrom(int $from): DealHistoryRequest
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
     * @return DealHistoryRequest
     */
    public function setTo(int $to): DealHistoryRequest
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
     * @return DealHistoryRequest
     */
    public function setLogins(array $logins): DealHistoryRequest
    {
        $this->logins = $logins;
        return $this;
    }


}
