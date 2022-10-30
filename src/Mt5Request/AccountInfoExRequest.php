<?php

namespace Ram\WIK\Mt5Request;

class AccountInfoExRequest extends BaseRequest
{

    protected string $login;

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return AccountInfoExRequest
     */
    public function setLogin(string $login): AccountInfoExRequest
    {
        $this->login = $login;
        return $this;
    }



}
