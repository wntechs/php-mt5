<?php

namespace Ram\WIK\Request;

class CheckPasswordRequest extends BaseRequest
{
    protected string $action = 'checkpassword';
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
     * @param string $action
     * @return CheckPasswordRequest
     */
    public function setAction(string $action): CheckPasswordRequest
    {
        $this->action = $action;
        return $this;
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
     * @return CheckPasswordRequest
     */
    public function setLogin(int $login): CheckPasswordRequest
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
     * @return CheckPasswordRequest
     */
    public function setMasterPassword(string $master_password): CheckPasswordRequest
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
     * @return CheckPasswordRequest
     */
    public function setInvestorPassword(int $investor_password): CheckPasswordRequest
    {
        $this->investor_password = $investor_password;
        return $this;
    }



}
