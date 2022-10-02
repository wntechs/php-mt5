<?php

namespace Ram\WIK\Response;

class ModifyAccountResponse extends BaseResponse
{
    protected string $login = '';

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return ModifyAccountResponse
     */
    public function setLogin(string $login): ModifyAccountResponse
    {
        $this->login = $login;
        return $this;
    }



}
