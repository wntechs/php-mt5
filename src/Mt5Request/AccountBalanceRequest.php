<?php

namespace Ram\WIK\Mt5Request;

class AccountBalanceRequest extends BaseRequest
{
    /**
     * @var int[]
     */
    protected array $logins;

    /**
     * @return int[]
     */
    public function getLogins(): array
    {
        return $this->logins;
    }

    /**
     * @param int[] $logins
     * @return AccountBalanceRequest
     */
    public function setLogins(array $logins): AccountBalanceRequest
    {
        $this->logins = $logins;
        return $this;
    }


}
