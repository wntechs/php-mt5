<?php

namespace Ram\WIK\Request;

class AccountHaveOrdersRequest extends BaseRequest
{
    protected string $action = 'accounthaveorders';
    protected int $login;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return int
     */
    public function getLogin(): int
    {
        return $this->login;
    }

    /**
     * @param int $login
     * @return AccountHaveOrdersRequest
     */
    public function setLogin(int $login): AccountHaveOrdersRequest
    {
        $this->login = $login;
        return $this;
    }




}
