<?php

namespace Ram\WIK\Request;

class ChangeCreditRequest extends BaseRequest
{
    protected string $action = 'changecredit';
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
     * @return ChangeCreditRequest
     */
    public function setLogin(string $login): ChangeCreditRequest
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


}
