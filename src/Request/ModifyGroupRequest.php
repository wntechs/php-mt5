<?php

namespace Ram\WIK\Request;

class ModifyGroupRequest extends BaseRequest
{
    protected string $action = 'modifygroup';

    protected string $name;
    protected string $currency;
    protected string $company;
    protected string $reports_email;
    protected string $support_email;
    protected int $leverage_by_default;
    protected float $deposit_by_default;
    protected int $send_copies_to_support_email;
    protected int $generate_daily_reports;
    protected float $margin_call;
    protected int $margin_mode;
    protected float $stop_out_level;
    protected int $news;
    protected float $annual_interest_rate;
    protected int $enable_charge_of_swaps;
    protected int $risk_management;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ModifyGroupRequest
     */
    public function setName(string $name): ModifyGroupRequest
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return ModifyGroupRequest
     */
    public function setCurrency(string $currency): ModifyGroupRequest
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return ModifyGroupRequest
     */
    public function setCompany(string $company): ModifyGroupRequest
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getReportsEmail(): string
    {
        return $this->reports_email;
    }

    /**
     * @param string $reports_email
     * @return ModifyGroupRequest
     */
    public function setReportsEmail(string $reports_email): ModifyGroupRequest
    {
        $this->reports_email = $reports_email;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupportEmail(): string
    {
        return $this->support_email;
    }

    /**
     * @param string $support_email
     * @return ModifyGroupRequest
     */
    public function setSupportEmail(string $support_email): ModifyGroupRequest
    {
        $this->support_email = $support_email;
        return $this;
    }

    /**
     * @return int
     */
    public function getLeverageByDefault(): int
    {
        return $this->leverage_by_default;
    }

    /**
     * @param int $leverage_by_default
     * @return ModifyGroupRequest
     */
    public function setLeverageByDefault(int $leverage_by_default): ModifyGroupRequest
    {
        $this->leverage_by_default = $leverage_by_default;
        return $this;
    }

    /**
     * @return float
     */
    public function getDepositByDefault(): float
    {
        return $this->deposit_by_default;
    }

    /**
     * @param float $deposit_by_default
     * @return ModifyGroupRequest
     */
    public function setDepositByDefault(float $deposit_by_default): ModifyGroupRequest
    {
        $this->deposit_by_default = $deposit_by_default;
        return $this;
    }

    /**
     * @return int
     */
    public function getSendCopiesToSupportEmail(): int
    {
        return $this->send_copies_to_support_email;
    }

    /**
     * @param int $send_copies_to_support_email
     * @return ModifyGroupRequest
     */
    public function setSendCopiesToSupportEmail(int $send_copies_to_support_email): ModifyGroupRequest
    {
        $this->send_copies_to_support_email = $send_copies_to_support_email;
        return $this;
    }

    /**
     * @return int
     */
    public function getGenerateDailyReports(): int
    {
        return $this->generate_daily_reports;
    }

    /**
     * @param int $generate_daily_reports
     * @return ModifyGroupRequest
     */
    public function setGenerateDailyReports(int $generate_daily_reports): ModifyGroupRequest
    {
        $this->generate_daily_reports = $generate_daily_reports;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarginCall(): float
    {
        return $this->margin_call;
    }

    /**
     * @param float $margin_call
     * @return ModifyGroupRequest
     */
    public function setMarginCall(float $margin_call): ModifyGroupRequest
    {
        $this->margin_call = $margin_call;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarginMode(): int
    {
        return $this->margin_mode;
    }

    /**
     * @param int $margin_mode
     * @return ModifyGroupRequest
     */
    public function setMarginMode(int $margin_mode): ModifyGroupRequest
    {
        $this->margin_mode = $margin_mode;
        return $this;
    }

    /**
     * @return float
     */
    public function getStopOutLevel(): float
    {
        return $this->stop_out_level;
    }

    /**
     * @param float $stop_out_level
     * @return ModifyGroupRequest
     */
    public function setStopOutLevel(float $stop_out_level): ModifyGroupRequest
    {
        $this->stop_out_level = $stop_out_level;
        return $this;
    }

    /**
     * @return int
     */
    public function getNews(): int
    {
        return $this->news;
    }

    /**
     * @param int $news
     * @return ModifyGroupRequest
     */
    public function setNews(int $news): ModifyGroupRequest
    {
        $this->news = $news;
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
     * @return ModifyGroupRequest
     */
    public function setAnnualInterestRate(float $annual_interest_rate): ModifyGroupRequest
    {
        $this->annual_interest_rate = $annual_interest_rate;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnableChargeOfSwaps(): int
    {
        return $this->enable_charge_of_swaps;
    }

    /**
     * @param int $enable_charge_of_swaps
     * @return ModifyGroupRequest
     */
    public function setEnableChargeOfSwaps(int $enable_charge_of_swaps): ModifyGroupRequest
    {
        $this->enable_charge_of_swaps = $enable_charge_of_swaps;
        return $this;
    }

    /**
     * @return int
     */
    public function getRiskManagement(): int
    {
        return $this->risk_management;
    }

    /**
     * @param int $risk_management
     * @return ModifyGroupRequest
     */
    public function setRiskManagement(int $risk_management): ModifyGroupRequest
    {
        $this->risk_management = $risk_management;
        return $this;
    }



}
