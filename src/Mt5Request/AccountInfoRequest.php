<?php

namespace Ram\WIK\Mt5Request;

class AccountInfoRequest extends BaseRequest
{
    protected string $action = 'getaccountinfo';
    protected string $login;

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
     * @return AccountInfoRequest
     */
    public function setLogin(string $login): AccountInfoRequest
    {
        $this->login = $login;
        return $this;
    }


}
