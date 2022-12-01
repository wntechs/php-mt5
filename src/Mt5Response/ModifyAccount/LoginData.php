<?php

namespace Ram\WIK\Mt5Response\ModifyAccount;

use Ram\WIK\Arrayable;

class LoginData extends Arrayable
{
    protected int $login;

    /**
     * @return int
     */
    public function getLogin(): int
    {
        return $this->login;
    }

    /**
     * @param int $login
     * @return LoginData
     */
    public function setLogin(int $login): LoginData
    {
        $this->login = $login;
        return $this;
    }


}
