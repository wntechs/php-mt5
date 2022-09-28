<?php

namespace Ram\WIK\Response\GetMarginInfo;

use Ram\WIK\Response\BaseResponse;

class GetMarginInfoResponse extends BaseResponse
{
    protected int $users;
    protected float $balance;
    protected float $equity;
    protected float $margin;
    protected float $free_margin;
    protected float $credit;
    protected string $failed_logins;

    /**
     * @var \Ram\WIK\Response\GetMarginInfo\MarginIfnoScsvLine[]
     */
    protected array $answer;

    /**
     * @return int
     */
    public function getUsers(): int
    {
        return $this->users;
    }

    /**
     * @param int $users
     * @return GetMarginInfoResponse
     */
    public function setUsers(int $users): GetMarginInfoResponse
    {
        $this->users = $users;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     * @return GetMarginInfoResponse
     */
    public function setBalance(float $balance): GetMarginInfoResponse
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getEquity(): float
    {
        return $this->equity;
    }

    /**
     * @param float $equity
     * @return GetMarginInfoResponse
     */
    public function setEquity(float $equity): GetMarginInfoResponse
    {
        $this->equity = $equity;
        return $this;
    }

    /**
     * @return float
     */
    public function getMargin(): float
    {
        return $this->margin;
    }

    /**
     * @param float $margin
     * @return GetMarginInfoResponse
     */
    public function setMargin(float $margin): GetMarginInfoResponse
    {
        $this->margin = $margin;
        return $this;
    }

    /**
     * @return float
     */
    public function getFreeMargin(): float
    {
        return $this->free_margin;
    }

    /**
     * @param float $free_margin
     * @return GetMarginInfoResponse
     */
    public function setFreeMargin(float $free_margin): GetMarginInfoResponse
    {
        $this->free_margin = $free_margin;
        return $this;
    }

    /**
     * @return float
     */
    public function getCredit(): float
    {
        return $this->credit;
    }

    /**
     * @param float $credit
     * @return GetMarginInfoResponse
     */
    public function setCredit(float $credit): GetMarginInfoResponse
    {
        $this->credit = $credit;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailedLogins(): string
    {
        return $this->failed_logins;
    }

    /**
     * @param string $failed_logins
     * @return GetMarginInfoResponse
     */
    public function setFailedLogins(string $failed_logins): GetMarginInfoResponse
    {
        $this->failed_logins = $failed_logins;
        return $this;
    }

    /**
     * @return array
     */
    public function getAnswer(): array
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     * @return GetMarginInfoResponse
     */
    public function setAnswer(string $answer): GetMarginInfoResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new GetMarginInfoResponse($line);
        }
        return $this;
    }



}
