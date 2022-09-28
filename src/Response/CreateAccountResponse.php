<?php

namespace Ram\WIK\Response;

class CreateAccountResponse extends BaseResponse
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
     * @return CreateAccountResponse
     */
    public function setLogin(string $login): CreateAccountResponse
    {
        $this->login = $login;
        return $this;
    }



}
