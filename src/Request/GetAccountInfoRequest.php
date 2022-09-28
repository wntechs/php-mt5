<?php

namespace Ram\WIK\Request;

class GetAccountInfoRequest extends BaseRequest
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
     * @return GetAccountInfoRequest
     */
    public function setLogin(string $login): GetAccountInfoRequest
    {
        $this->login = $login;
        return $this;
    }


}
