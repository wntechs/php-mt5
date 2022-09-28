<?php

namespace Ram\WIK\Response;

class CheckPasswordResponse extends BaseResponse
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
     * @return CheckPasswordResponse
     */
    public function setLogin(int $login): CheckPasswordResponse
    {
        $this->login = $login;
        return $this;
    }

}
