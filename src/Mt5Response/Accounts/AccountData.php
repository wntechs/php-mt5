<?php

namespace Ram\WIK\Mt5Response\Accounts;

use Ram\WIK\Arrayable;

class AccountData extends Arrayable
{
    /**
     * @var \Ram\WIK\Mt5Response\Accounts\Account[]
     */
    protected array $accounts;

    /**
     * @return array
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

    /**
     * @param \Ram\WIK\Mt5Response\Accounts\Account[] $accounts
     * @return AccountData
     */
    public function setAccounts(array $accounts): AccountData
    {
        $this->accounts = $accounts;
        return $this;
    }





}
