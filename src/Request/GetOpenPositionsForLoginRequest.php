<?php

namespace Ram\WIK\Request;

class GetOpenPositionsForLoginRequest extends BaseRequest
{
    protected string $action = 'getopenpositionsforlogin';
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
     * @return GetOpenPositionsForLoginRequest
     */
    public function setLogin(string $login): GetOpenPositionsForLoginRequest
    {
        $this->login = $login;
        return $this;
    }



}
