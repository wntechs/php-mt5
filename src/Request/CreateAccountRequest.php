<?php

namespace Ram\WIK\Request;

class CreateAccountRequest extends BaseRequest
{
    protected string $action = 'createaccount';
    protected string $group;
    protected string $investor_password;
    protected int $leverage;
    protected string $master_password;

    protected int $agent_account;
    protected string $address;
    protected string $email;
    protected string $status;
    protected string $id;
    protected string $city;
    protected string $state;
    protected string $zipcode;
    protected string $country;
    protected string $phone;
    protected string $phone_password;
    protected string $comment;
    protected string $name;
    protected int $enable;
    protected int $enable_change_password;
    protected int $enable_trading;
    protected int $enable_trading_by_expert_advisors;
    protected int $enable_web_api_connection;
    protected int $enable_daily_report;
    protected int $enable_change_password_at_next_login;
    protected int $enable_one_time_password;
    protected int $enable_trailing_stop;

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
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     * @return CreateAccountRequest
     */
    public function setGroup(string $group): CreateAccountRequest
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvestorPassword(): string
    {
        return $this->investor_password;
    }

    /**
     * @param string $investor_password
     * @return CreateAccountRequest
     */
    public function setInvestorPassword(string $investor_password): CreateAccountRequest
    {
        $this->investor_password = $investor_password;
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
     * @return CreateAccountRequest
     */
    public function setLeverage(int $leverage): CreateAccountRequest
    {
        $this->leverage = $leverage;
        return $this;
    }

    /**
     * @return string
     */
    public function getMasterPassword(): string
    {
        return $this->master_password;
    }

    /**
     * @param string $master_password
     * @return CreateAccountRequest
     */
    public function setMasterPassword(string $master_password): CreateAccountRequest
    {
        $this->master_password = $master_password;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgentAccount(): int
    {
        return $this->agent_account;
    }

    /**
     * @param int $agent_account
     * @return CreateAccountRequest
     */
    public function setAgentAccount(int $agent_account): CreateAccountRequest
    {
        $this->agent_account = $agent_account;
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
     * @return CreateAccountRequest
     */
    public function setAddress(string $address): CreateAccountRequest
    {
        $this->address = $address;
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
     * @return CreateAccountRequest
     */
    public function setEmail(string $email): CreateAccountRequest
    {
        $this->email = $email;
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
     * @return CreateAccountRequest
     */
    public function setStatus(string $status): CreateAccountRequest
    {
        $this->status = $status;
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
     * @return CreateAccountRequest
     */
    public function setId(string $id): CreateAccountRequest
    {
        $this->id = $id;
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
     * @return CreateAccountRequest
     */
    public function setCity(string $city): CreateAccountRequest
    {
        $this->city = $city;
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
     * @return CreateAccountRequest
     */
    public function setState(string $state): CreateAccountRequest
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return CreateAccountRequest
     */
    public function setZipcode(string $zipcode): CreateAccountRequest
    {
        $this->zipcode = $zipcode;
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
     * @return CreateAccountRequest
     */
    public function setCountry(string $country): CreateAccountRequest
    {
        $this->country = $country;
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
     * @return CreateAccountRequest
     */
    public function setPhone(string $phone): CreateAccountRequest
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhonePassword(): string
    {
        return $this->phone_password;
    }

    /**
     * @param string $phone_password
     * @return CreateAccountRequest
     */
    public function setPhonePassword(string $phone_password): CreateAccountRequest
    {
        $this->phone_password = $phone_password;
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
     * @return CreateAccountRequest
     */
    public function setComment(string $comment): CreateAccountRequest
    {
        $this->comment = $comment;
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
     * @return CreateAccountRequest
     */
    public function setName(string $name): CreateAccountRequest
    {
        $this->name = $name;
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
     * @return CreateAccountRequest
     */
    public function setEnable(int $enable): CreateAccountRequest
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnableChangePassword(): int
    {
        return $this->enable_change_password;
    }

    /**
     * @param int $enable_change_password
     * @return CreateAccountRequest
     */
    public function setEnableChangePassword(int $enable_change_password): CreateAccountRequest
    {
        $this->enable_change_password = $enable_change_password;
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
     * @return CreateAccountRequest
     */
    public function setEnableTrading(int $enable_trading): CreateAccountRequest
    {
        $this->enable_trading = $enable_trading;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnableTradingByExpertAdvisors(): int
    {
        return $this->enable_trading_by_expert_advisors;
    }

    /**
     * @param int $enable_trading_by_expert_advisors
     * @return CreateAccountRequest
     */
    public function setEnableTradingByExpertAdvisors(int $enable_trading_by_expert_advisors): CreateAccountRequest
    {
        $this->enable_trading_by_expert_advisors = $enable_trading_by_expert_advisors;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnableWebApiConnection(): int
    {
        return $this->enable_web_api_connection;
    }

    /**
     * @param int $enable_web_api_connection
     * @return CreateAccountRequest
     */
    public function setEnableWebApiConnection(int $enable_web_api_connection): CreateAccountRequest
    {
        $this->enable_web_api_connection = $enable_web_api_connection;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnableDailyReport(): int
    {
        return $this->enable_daily_report;
    }

    /**
     * @param int $enable_daily_report
     * @return CreateAccountRequest
     */
    public function setEnableDailyReport(int $enable_daily_report): CreateAccountRequest
    {
        $this->enable_daily_report = $enable_daily_report;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnableChangePasswordAtNextLogin(): int
    {
        return $this->enable_change_password_at_next_login;
    }

    /**
     * @param int $enable_change_password_at_next_login
     * @return CreateAccountRequest
     */
    public function setEnableChangePasswordAtNextLogin(int $enable_change_password_at_next_login): CreateAccountRequest
    {
        $this->enable_change_password_at_next_login = $enable_change_password_at_next_login;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnableOneTimePassword(): int
    {
        return $this->enable_one_time_password;
    }

    /**
     * @param int $enable_one_time_password
     * @return CreateAccountRequest
     */
    public function setEnableOneTimePassword(int $enable_one_time_password): CreateAccountRequest
    {
        $this->enable_one_time_password = $enable_one_time_password;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnableTrailingStop(): int
    {
        return $this->enable_trailing_stop;
    }

    /**
     * @param int $enable_trailing_stop
     * @return CreateAccountRequest
     */
    public function setEnableTrailingStop(int $enable_trailing_stop): CreateAccountRequest
    {
        $this->enable_trailing_stop = $enable_trailing_stop;
        return $this;
    }



}
