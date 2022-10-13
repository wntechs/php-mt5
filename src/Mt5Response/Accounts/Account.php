<?php

namespace Ram\WIK\Mt5Response\Accounts;

use Ram\WIK\Arrayable;

class Account extends BaseAccount
{

    protected int $registration;
    protected int $last_access;

    /**
     * @return int
     */
    public function getRegistration(): int
    {
        return $this->registration;
    }

    /**
     * @param int $registration
     * @return Account
     */
    public function setRegistration(int $registration): Account
    {
        $this->registration = $registration;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastAccess(): int
    {
        return $this->last_access;
    }

    /**
     * @param int $last_access
     * @return Account
     */
    public function setLastAccess(int $last_access): Account
    {
        $this->last_access = $last_access;
        return $this;
    }



}
