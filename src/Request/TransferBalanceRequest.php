<?php

namespace Ram\WIK\Request;

class TransferBalanceRequest extends BaseRequest
{
    protected  string $action = 'transferbalance';

    /**
     * @var string[]
     */
    protected array $receiver_logins;

    /**
     * @var string[]
     */
    protected array $from_logins;

    protected float $amount;
    protected string $receiver_comment;
    protected string $from_comment;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return array
     */
    public function getReceiverLogins(): array
    {
        return $this->receiver_logins;
    }

    /**
     * @param array $receiver_logins
     * @return TransferBalanceRequest
     */
    public function setReceiverLogins(array $receiver_logins): TransferBalanceRequest
    {
        $this->receiver_logins = $receiver_logins;
        return $this;
    }

    /**
     * @return array
     */
    public function getFromLogins(): array
    {
        return $this->from_logins;
    }

    /**
     * @param array $from_logins
     * @return TransferBalanceRequest
     */
    public function setFromLogins(array $from_logins): TransferBalanceRequest
    {
        $this->from_logins = $from_logins;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return TransferBalanceRequest
     */
    public function setAmount(float $amount): TransferBalanceRequest
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiverComment(): string
    {
        return $this->receiver_comment;
    }

    /**
     * @param string $receiver_comment
     * @return TransferBalanceRequest
     */
    public function setReceiverComment(string $receiver_comment): TransferBalanceRequest
    {
        $this->receiver_comment = $receiver_comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromComment(): string
    {
        return $this->from_comment;
    }

    /**
     * @param string $from_comment
     * @return TransferBalanceRequest
     */
    public function setFromComment(string $from_comment): TransferBalanceRequest
    {
        $this->from_comment = $from_comment;
        return $this;
    }



}
