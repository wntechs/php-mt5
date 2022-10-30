<?php

namespace Ram\WIK\Mt5Response\AccountInfoEx;

use Ram\WIK\Mt5Response\Accounts\BaseAccount;


class AccountInfoEx extends BaseAccount
{
    protected int $enable_change_password;
    protected string $status;
    protected float $annual_interest_rate;
    protected string $send_reports;
    protected float $previous_month_balance;
    protected float $previous_day_balance;
    protected float $credit;
    protected float $equity;
    protected float $margin;
    protected float $margin_level;
    protected int $enable;
    protected int $enable_trading;

    /**
     * @return int
     */
    public function getEnableChangePassword(): int
    {
        return $this->enable_change_password;
    }

    /**
     * @param int $enable_change_password
     * @return AccountInfoEx
     */
    public function setEnableChangePassword(int $enable_change_password): AccountInfoEx
    {
        $this->enable_change_password = $enable_change_password;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return AccountInfoEx
     */
    public function setStatus(string $status): AccountInfoEx
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return float
     */
    public function getAnnualInterestRate(): float
    {
        return $this->annual_interest_rate;
    }

    /**
     * @param float $annual_interest_rate
     * @return AccountInfoEx
     */
    public function setAnnualInterestRate(float $annual_interest_rate): AccountInfoEx
    {
        $this->annual_interest_rate = $annual_interest_rate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSendReports(): string
    {
        return $this->send_reports;
    }

    /**
     * @param string $send_reports
     * @return AccountInfoEx
     */
    public function setSendReports(string $send_reports): AccountInfoEx
    {
        $this->send_reports = $send_reports;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreviousMonthBalance(): float
    {
        return $this->previous_month_balance;
    }

    /**
     * @param float $previous_month_balance
     * @return AccountInfoEx
     */
    public function setPreviousMonthBalance(float $previous_month_balance): AccountInfoEx
    {
        $this->previous_month_balance = $previous_month_balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreviousDayBalance(): float
    {
        return $this->previous_day_balance;
    }

    /**
     * @param float $previous_day_balance
     * @return AccountInfoEx
     */
    public function setPreviousDayBalance(float $previous_day_balance): AccountInfoEx
    {
        $this->previous_day_balance = $previous_day_balance;
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
     * @return AccountInfoEx
     */
    public function setCredit(float $credit): AccountInfoEx
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
     * @return AccountInfoEx
     */
    public function setEquity(float $equity): AccountInfoEx
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
     * @return AccountInfoEx
     */
    public function setMargin(float $margin): AccountInfoEx
    {
        $this->margin = $margin;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarginLevel(): float
    {
        return $this->margin_level;
    }

    /**
     * @param float $margin_level
     * @return AccountInfoEx
     */
    public function setMarginLevel(float $margin_level): AccountInfoEx
    {
        $this->margin_level = $margin_level;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnable(): int
    {
        return $this->enable;
    }

    /**
     * @param int $enable
     * @return AccountInfoEx
     */
    public function setEnable(int $enable): AccountInfoEx
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnableTrading(): int
    {
        return $this->enable_trading;
    }

    /**
     * @param int $enable_trading
     * @return AccountInfoEx
     */
    public function setEnableTrading(int $enable_trading): AccountInfoEx
    {
        $this->enable_trading = $enable_trading;
        return $this;
    }



}
