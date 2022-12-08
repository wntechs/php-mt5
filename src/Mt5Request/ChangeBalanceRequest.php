<?php

namespace Ram\WIK\Mt5Request;

class ChangeBalanceRequest extends BaseRequest
{
    protected float $value;
    protected string $comment;
    protected int $login;

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

    /**
     * @return int
     */
    public function getLogin(): int
    {
        return $this->login;
    }

    /**
     * @param int $login
     * @return ChangeBalanceRequest
     */
    public function setLogin(int $login): ChangeBalanceRequest
    {
        $this->login = $login;
        return $this;
    }


}
