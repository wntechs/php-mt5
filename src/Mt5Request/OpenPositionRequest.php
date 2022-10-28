<?php

namespace Ram\WIK\Mt5Request;

class OpenPositionRequest extends BaseRequest
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
     * @return OpenPositionRequest
     */
    public function setLogin(int $login): OpenPositionRequest
    {
        $this->login = $login;
        return $this;
    }

}
