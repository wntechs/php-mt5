<?php

namespace Ram\WIK\Response;

class GetAccountInfoExResponse extends BaseResponse
{
    protected string $login;
    protected string $name;
    protected string $email;
    protected string $group;
    protected int $leverage;
    protected string $regdate;
    protected string $country;
    protected string $state;
    protected string $address;
    protected string $phone;
    protected string $city;
    protected string $zip;
    protected string $enable;
    protected int $enable_trading;
    protected float $balance;
    protected string $comment;
    protected string $enable_change_password;
    protected float $free_margin;
    protected string $opened_positions;
    protected string $agent_account;
    protected string $id;
    protected string $status;
    protected float $annual_interest_rate;
    protected string $send_reports;
    protected float $previous_month_balance;
    protected float $previous_day_balance;
    protected float $credit;
    protected float $equity;
    protected float $margin;
    protected float $margin_level;
    protected string $lastdate;

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return GetAccountInfoExResponse
     */
    public function setLogin(string $login): GetAccountInfoExResponse
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return GetAccountInfoExResponse
     */
    public function setName(string $name): GetAccountInfoExResponse
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return GetAccountInfoExResponse
     */
    public function setEmail(string $email): GetAccountInfoExResponse
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     * @return GetAccountInfoExResponse
     */
    public function setGroup(string $group): GetAccountInfoExResponse
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return int
     */
    public function getLeverage(): int
    {
        return $this->leverage;
    }

    /**
     * @param int $leverage
     * @return GetAccountInfoExResponse
     */
    public function setLeverage(int $leverage): GetAccountInfoExResponse
    {
        $this->leverage = $leverage;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegdate(): string
    {
        return $this->regdate;
    }

    /**
     * @param string $regdate
     * @return GetAccountInfoExResponse
     */
    public function setRegdate(string $regdate): GetAccountInfoExResponse
    {
        $this->regdate = $regdate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return GetAccountInfoExResponse
     */
    public function setCountry(string $country): GetAccountInfoExResponse
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return GetAccountInfoExResponse
     */
    public function setState(string $state): GetAccountInfoExResponse
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return GetAccountInfoExResponse
     */
    public function setAddress(string $address): GetAccountInfoExResponse
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return GetAccountInfoExResponse
     */
    public function setPhone(string $phone): GetAccountInfoExResponse
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return GetAccountInfoExResponse
     */
    public function setCity(string $city): GetAccountInfoExResponse
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return GetAccountInfoExResponse
     */
    public function setZip(string $zip): GetAccountInfoExResponse
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnable(): string
    {
        return $this->enable;
    }

    /**
     * @param string $enable
     * @return GetAccountInfoExResponse
     */
    public function setEnable(string $enable): GetAccountInfoExResponse
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
     * @return GetAccountInfoExResponse
     */
    public function setEnableTrading(int $enable_trading): GetAccountInfoExResponse
    {
        $this->enable_trading = $enable_trading;
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
     * @return GetAccountInfoExResponse
     */
    public function setBalance(float $balance): GetAccountInfoExResponse
    {
        $this->balance = $balance;
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
     * @return GetAccountInfoExResponse
     */
    public function setComment(string $comment): GetAccountInfoExResponse
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnableChangePassword(): string
    {
        return $this->enable_change_password;
    }

    /**
     * @param string $enable_change_password
     * @return GetAccountInfoExResponse
     */
    public function setEnableChangePassword(string $enable_change_password): GetAccountInfoExResponse
    {
        $this->enable_change_password = $enable_change_password;
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
     * @return GetAccountInfoExResponse
     */
    public function setFreeMargin(float $free_margin): GetAccountInfoExResponse
    {
        $this->free_margin = $free_margin;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenedPositions(): string
    {
        return $this->opened_positions;
    }

    /**
     * @param string $opened_positions
     * @return GetAccountInfoExResponse
     */
    public function setOpenedPositions(string $opened_positions): GetAccountInfoExResponse
    {
        $this->opened_positions = $opened_positions;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgentAccount(): string
    {
        return $this->agent_account;
    }

    /**
     * @param string $agent_account
     * @return GetAccountInfoExResponse
     */
    public function setAgentAccount(string $agent_account): GetAccountInfoExResponse
    {
        $this->agent_account = $agent_account;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return GetAccountInfoExResponse
     */
    public function setId(string $id): GetAccountInfoExResponse
    {
        $this->id = $id;
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
     * @return GetAccountInfoExResponse
     */
    public function setStatus(string $status): GetAccountInfoExResponse
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
     * @return GetAccountInfoExResponse
     */
    public function setAnnualInterestRate(float $annual_interest_rate): GetAccountInfoExResponse
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
     * @return GetAccountInfoExResponse
     */
    public function setSendReports(string $send_reports): GetAccountInfoExResponse
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
     * @return GetAccountInfoExResponse
     */
    public function setPreviousMonthBalance(float $previous_month_balance): GetAccountInfoExResponse
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
     * @return GetAccountInfoExResponse
     */
    public function setPreviousDayBalance(float $previous_day_balance): GetAccountInfoExResponse
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
     * @return GetAccountInfoExResponse
     */
    public function setCredit(float $credit): GetAccountInfoExResponse
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
     * @return GetAccountInfoExResponse
     */
    public function setEquity(float $equity): GetAccountInfoExResponse
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
     * @return GetAccountInfoExResponse
     */
    public function setMargin(float $margin): GetAccountInfoExResponse
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
     * @return GetAccountInfoExResponse
     */
    public function setMarginLevel(float $margin_level): GetAccountInfoExResponse
    {
        $this->margin_level = $margin_level;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastdate(): string
    {
        return $this->lastdate;
    }

    /**
     * @param string $lastdate
     * @return GetAccountInfoExResponse
     */
    public function setLastdate(string $lastdate): GetAccountInfoExResponse
    {
        $this->lastdate = $lastdate;
        return $this;
    }



}
