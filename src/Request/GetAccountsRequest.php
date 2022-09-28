<?php

namespace Ram\WIK\Request;

class GetAccountsRequest extends BaseRequest
{
    protected string $group;
    protected string $action = 'getaccounts';

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     * @return GetAccountsRequest
     */
    public function setGroup(string $group): GetAccountsRequest
    {
        $this->group = $group;
        return $this;
    }



    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }



}
