<?php

namespace Ram\WIK\Mt5Request;

class ChangeCreditRequest extends BaseRequest
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
     * @return ChangeCreditRequest
     */
    public function setValue(float $value): ChangeCreditRequest
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
     * @return ChangeCreditRequest
     */
    public function setComment(string $comment): ChangeCreditRequest
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
     * @return ChangeCreditRequest
     */
    public function setLogin(int $login): ChangeCreditRequest
    {
        $this->login = $login;
        return $this;
    }


}
