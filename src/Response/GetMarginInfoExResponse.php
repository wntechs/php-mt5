<?php

namespace Ram\WIK\Response;

class GetMarginInfoExResponse extends BaseResponse
{
    protected int $users;
    protected float $balance;
    protected float $credit;
    protected float $equity;
    protected float $margin;
    protected float $freeMargin;
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
     * @return GetMarginInfoExResponse
     */
    public function setUsers(int $users): GetMarginInfoExResponse
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
     * @return GetMarginInfoExResponse
     */
    public function setBalance(float $balance): GetMarginInfoExResponse
    {
        $this->balance = $balance;
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
     * @return GetMarginInfoExResponse
     */
    public function setCredit(float $credit): GetMarginInfoExResponse
    {
        $this->credit = $credit;
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
     * @return GetMarginInfoExResponse
     */
    public function setEquity(float $equity): GetMarginInfoExResponse
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
     * @return GetMarginInfoExResponse
     */
    public function setMargin(float $margin): GetMarginInfoExResponse
    {
        $this->margin = $margin;
        return $this;
    }

    /**
     * @return float
     */
    public function getFreeMargin(): float
    {
        return $this->freeMargin;
    }

    /**
     * @param float $freeMargin
     * @return GetMarginInfoExResponse
     */
    public function setFreeMargin(float $freeMargin): GetMarginInfoExResponse
    {
        $this->freeMargin = $freeMargin;
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
     * @return GetMarginInfoExResponse
     */
    public function setFailedLogins(string $failed_logins): GetMarginInfoExResponse
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
     * @return GetMarginInfoExResponse
     */
    public function setAnswer(string $answer): GetMarginInfoExResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new GetMarginInfoExResponse($line);
        }
        return $this;
    }



}
