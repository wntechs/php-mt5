<?php

namespace Ram\WIK\Response;

class GetGroupResponse extends BaseResponse
{

    protected string $name;
    protected string $currency;
    protected string $company;
    protected string $reports_email;
    protected string $support_email;
    protected string $templates;
    protected int $enable_connections;
    protected int $leverage_by_default;
    protected float $deposit_by_default;
    protected int $send_copies_to_support_email;
    protected int $generate_daily_reports;
    protected float $margin_call;
    protected int $margin_mode;
    protected string $news;
    protected float $stop_out_level;
    protected string $check_ie_prices;
    protected int $maximum_positions_count;
    protected float $annual_interest_rate;
    protected int $enable_charge_of_swaps;
    protected int $margin_type;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return GetGroupResponse
     */
    public function setName(string $name): GetGroupResponse
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNews(): string
    {
        return $this->news;
    }

    /**
     * @param string $news
     * @return GetGroupResponse
     */
    public function setNews(string $news): GetGroupResponse
    {
        $this->news = $news;
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
     * @return GetGroupResponse
     */
    public function setCurrency(string $currency): GetGroupResponse
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
     * @return GetGroupResponse
     */
    public function setCompany(string $company): GetGroupResponse
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
     * @return GetGroupResponse
     */
    public function setReportsEmail(string $reports_email): GetGroupResponse
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
     * @return GetGroupResponse
     */
    public function setSupportEmail(string $support_email): GetGroupResponse
    {
        $this->support_email = $support_email;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplates(): string
    {
        return $this->templates;
    }

    /**
     * @param string $templates
     * @return GetGroupResponse
     */
    public function setTemplates(string $templates): GetGroupResponse
    {
        $this->templates = $templates;
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
     * @return GetGroupResponse
     */
    public function setEnableConnections(int $enable_connections): GetGroupResponse
    {
        $this->enable_connections = $enable_connections;
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
     * @return GetGroupResponse
     */
    public function setLeverageByDefault(int $leverage_by_default): GetGroupResponse
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
     * @return GetGroupResponse
     */
    public function setDepositByDefault(float $deposit_by_default): GetGroupResponse
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
     * @return GetGroupResponse
     */
    public function setSendCopiesToSupportEmail(int $send_copies_to_support_email): GetGroupResponse
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
     * @return GetGroupResponse
     */
    public function setGenerateDailyReports(int $generate_daily_reports): GetGroupResponse
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
     * @return GetGroupResponse
     */
    public function setMarginCall(float $margin_call): GetGroupResponse
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
     * @return GetGroupResponse
     */
    public function setMarginMode(int $margin_mode): GetGroupResponse
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
     * @return GetGroupResponse
     */
    public function setStopOutLevel(float $stop_out_level): GetGroupResponse
    {
        $this->stop_out_level = $stop_out_level;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckIePrices(): string
    {
        return $this->check_ie_prices;
    }

    /**
     * @param string $check_ie_prices
     * @return GetGroupResponse
     */
    public function setCheckIePrices(string $check_ie_prices): GetGroupResponse
    {
        $this->check_ie_prices = $check_ie_prices;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumPositionsCount(): int
    {
        return $this->maximum_positions_count;
    }

    /**
     * @param int $maximum_positions_count
     * @return GetGroupResponse
     */
    public function setMaximumPositionsCount(int $maximum_positions_count): GetGroupResponse
    {
        $this->maximum_positions_count = $maximum_positions_count;
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
     * @return GetGroupResponse
     */
    public function setAnnualInterestRate(float $annual_interest_rate): GetGroupResponse
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
     * @return GetGroupResponse
     */
    public function setEnableChargeOfSwaps(int $enable_charge_of_swaps): GetGroupResponse
    {
        $this->enable_charge_of_swaps = $enable_charge_of_swaps;
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
     * @return GetGroupResponse
     */
    public function setMarginType(int $margin_type): GetGroupResponse
    {
        $this->margin_type = $margin_type;
        return $this;
    }



}
