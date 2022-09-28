<?php

namespace Ram\WIK\Request;

class AccountHavePositionsRequest extends BaseRequest
{
    protected string $action = 'accounthavepositions';
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
     * @return AccountHavePositionsRequest
     */
    public function setLogin(int $login): AccountHavePositionsRequest
    {
        $this->login = $login;
        return $this;
    }

}
