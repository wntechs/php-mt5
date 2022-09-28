<?php

namespace Ram\WIK\Request;

class DeleteAccountRequest extends BaseRequest
{
    protected string $action = 'deleteaccount';
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
     * @return DeleteAccountRequest
     */
    public function setLogin(string $login): DeleteAccountRequest
    {
        $this->login = $login;
        return $this;
    }

}
