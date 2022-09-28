<?php

namespace Ram\WIK\Request;

class BalanceFixRequest extends BaseRequest
{
    protected string $action = 'balancefix';
    /**
     * @var string[]
     */
    protected array $logins;

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
        return implode(';',$this->logins);
    }

    /**
     * @param array $logins
     * @return BalanceFixRequest
     */
    public function setLogins(array $logins): BalanceFixRequest
    {
        $this->logins = $logins;
        return $this;
    }



}
