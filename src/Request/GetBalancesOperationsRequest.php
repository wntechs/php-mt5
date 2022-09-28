<?php

namespace Ram\WIK\Request;

class GetBalancesOperationsRequest extends BaseRequest
{
    protected string $action = 'getbalancesoperations';
    protected string $login;
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
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return GetBalancesOperationsRequest
     */
    public function setLogin(string $login): GetBalancesOperationsRequest
    {
        $this->login = $login;
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
     * @return GetBalancesOperationsRequest
     */
    public function setFrom(int $from): GetBalancesOperationsRequest
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
     * @return GetBalancesOperationsRequest
     */
    public function setTo(int $to): GetBalancesOperationsRequest
    {
        $this->to = $to;
        return $this;
    }



}
