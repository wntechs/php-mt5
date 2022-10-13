<?php

namespace Ram\WIK\Mt5Response\Accounts;

use Ram\WIK\Arrayable;

class AccountList extends Arrayable
{
    protected AccountData $Data;

    /**
     * @return \Ram\WIK\Mt5Response\Accounts\AccountData
     */
    public function getData(): AccountData
    {
        return $this->Data;
    }

    /**
     * @param \Ram\WIK\Mt5Response\Accounts\AccountData $Data
     * @return AccountList
     */
    public function setData(AccountData $Data): AccountList
    {
        $this->Data = $Data;
        return $this;
    }



}
