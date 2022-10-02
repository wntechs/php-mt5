<?php

namespace Ram\WIK\Response;

class DeleteAccountResponse extends BaseResponse
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
     * @return DeleteAccountResponse
     */
    public function setLogin(string $login): DeleteAccountResponse
    {
        $this->login = $login;
        return $this;
    }



}
