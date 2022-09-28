<?php

namespace Ram\WIK\Request;

class ChangePasswordRequest extends BaseRequest
{
    protected string $action = 'changepassword';
    protected int $login;
    protected string $master_password;
    protected int $investor_password;

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
     * @return ChangePasswordRequest
     */
    public function setLogin(int $login): ChangePasswordRequest
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getMasterPassword(): string
    {
        return $this->master_password;
    }

    /**
     * @param string $master_password
     * @return ChangePasswordRequest
     */
    public function setMasterPassword(string $master_password): ChangePasswordRequest
    {
        $this->master_password = $master_password;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvestorPassword(): int
    {
        return $this->investor_password;
    }

    /**
     * @param int $investor_password
     * @return ChangePasswordRequest
     */
    public function setInvestorPassword(int $investor_password): ChangePasswordRequest
    {
        $this->investor_password = $investor_password;
        return $this;
    }




}
