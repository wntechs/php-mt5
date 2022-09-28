<?php

namespace Ram\WIK\Request;

class GetAccountInfoExRequest extends BaseRequest
{
    protected string $action = 'getaccountinfoex';
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
     * @return GetAccountInfoExRequest
     */
    public function setLogin(string $login): GetAccountInfoExRequest
    {
        $this->login = $login;
        return $this;
    }



}
