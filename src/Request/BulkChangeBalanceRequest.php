<?php

namespace Ram\WIK\Request;

class BulkChangeBalanceRequest extends BaseRequest
{
    protected  string $action = 'bulkchangebalance';
    protected string $logins;

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
    public function getLogins(): string
    {
        return $this->logins;
    }

    /**
     * @param string $logins
     * @return BulkChangeBalanceRequest
     */
    public function setLogins(string $logins): BulkChangeBalanceRequest
    {
        $this->logins = $logins;
        return $this;
    }



}
