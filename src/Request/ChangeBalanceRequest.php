<?php

namespace Ram\WIK\Request;

class ChangeBalanceRequest extends BaseRequest
{
    protected string $action = 'changebalance';
    protected string $login;
    protected float $value;
    protected string $comment;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }


    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return ChangeBalanceRequest
     */
    public function setLogin(string $login): ChangeBalanceRequest
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return ChangeBalanceRequest
     */
    public function setValue(float $value): ChangeBalanceRequest
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return ChangeBalanceRequest
     */
    public function setComment(string $comment): ChangeBalanceRequest
    {
        $this->comment = $comment;
        return $this;
    }


}
