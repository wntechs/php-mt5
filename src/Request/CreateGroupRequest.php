<?php

namespace Ram\WIK\Request;

class CreateGroupRequest extends BaseRequest
{
    protected string $action = 'creategroup';
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
    protected int $use_swap;
    protected int $risk_management;
    protected int $margin_type;
    protected int $enable_connections;
    protected int $send_emails;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return CreateGroupRequest
     */
    public function setAction(string $action): CreateGroupRequest
    {
        $this->action = $action;
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
     * @return CreateGroupRequest
     */
    public function setName(string $name): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setCurrency(string $currency): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setCompany(string $company): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setReportsEmail(string $reports_email): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setSupportEmail(string $support_email): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setLeverageByDefault(int $leverage_by_default): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setDepositByDefault(float $deposit_by_default): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setSendCopiesToSupportEmail(int $send_copies_to_support_email): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setGenerateDailyReports(int $generate_daily_reports): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setMarginCall(float $margin_call): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setMarginMode(int $margin_mode): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setStopOutLevel(float $stop_out_level): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setNews(int $news): CreateGroupRequest
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
     * @return CreateGroupRequest
     */
    public function setAnnualInterestRate(float $annual_interest_rate): CreateGroupRequest
    {
        $this->annual_interest_rate = $annual_interest_rate;
        return $this;
    }

    /**
     * @return int
     */
    public function getUseSwap(): int
    {
        return $this->use_swap;
    }

    /**
     * @param int $use_swap
     * @return CreateGroupRequest
     */
    public function setUseSwap(int $use_swap): CreateGroupRequest
    {
        $this->use_swap = $use_swap;
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
     * @return CreateGroupRequest
     */
    public function setRiskManagement(int $risk_management): CreateGroupRequest
    {
        $this->risk_management = $risk_management;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarginType(): int
    {
        return $this->margin_type;
    }

    /**
     * @param int $margin_type
     * @return CreateGroupRequest
     */
    public function setMarginType(int $margin_type): CreateGroupRequest
    {
        $this->margin_type = $margin_type;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnableConnections(): int
    {
        return $this->enable_connections;
    }

    /**
     * @param int $enable_connections
     * @return CreateGroupRequest
     */
    public function setEnableConnections(int $enable_connections): CreateGroupRequest
    {
        $this->enable_connections = $enable_connections;
        return $this;
    }

    /**
     * @return int
     */
    public function getSendEmails(): int
    {
        return $this->send_emails;
    }

    /**
     * @param int $send_emails
     * @return CreateGroupRequest
     */
    public function setSendEmails(int $send_emails): CreateGroupRequest
    {
        $this->send_emails = $send_emails;
        return $this;
    }



}
