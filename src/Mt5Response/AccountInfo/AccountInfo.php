<?php

namespace Ram\WIK\Mt5Response\AccountInfo;

use Ram\WIK\Mt5Response\Accounts\BaseAccount;

class AccountInfo extends BaseAccount
{
    protected int $rights;

    /**
     * @return int
     */
    public function getRights(): int
    {
        return $this->rights;
    }

    /**
     * @param int $rights
     * @return AccountInfo
     */
    public function setRights(int $rights): AccountInfo
    {
        $this->rights = $rights;
        return $this;
    }



}
