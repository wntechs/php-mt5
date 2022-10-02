<?php

namespace Ram\WIK\Response;

class ChangePasswordResponse extends BaseResponse
{
    protected int $login = 0;

    /**
     * @return int
     */
    public function getLogin(): int
    {
        return $this->login;
    }

    /**
     * @param int $login
     * @return ChangePasswordResponse
     */
    public function setLogin(int $login): ChangePasswordResponse
    {
        $this->login = $login;
        return $this;
    }


}
