<?php

namespace Ram\WIK\Mt5Response\Accounts;

use Ram\WIK\Arrayable;

abstract class BaseAccount extends Arrayable
{

    protected int $login;
    protected string $name;
    protected string $email;
    protected string $group;
    protected int $leverage;
   // protected int $registration;
    protected string $country;
    protected string $state;
    protected string $city;
    protected string $zipcode;
    protected int $enable;
    protected int $enable_trading;
    protected float $balance;
    protected string $comment;
    protected int $enable_change_password;
    protected int $agent_account;
    //protected int $last_access;
    protected string $id;

    /**
     * @return int
     */
    public function getLogin(): int
    {
        return $this->login;
    }

    /**
     * @param int $login
     * @return BaseAccount
     */
    public function setLogin(int $login): BaseAccount
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
     * @return BaseAccount
     */
    public function setName(string $name): BaseAccount
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
     * @return BaseAccount
     */
    public function setEmail(string $email): BaseAccount
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
     * @return BaseAccount
     */
    public function setGroup(string $group): BaseAccount
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
     * @return BaseAccount
     */
    public function setLeverage(int $leverage): BaseAccount
    {
        $this->leverage = $leverage;
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
     * @return BaseAccount
     */
    public function setCountry(string $country): BaseAccount
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
     * @return BaseAccount
     */
    public function setState(string $state): BaseAccount
    {
        $this->state = $state;
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
     * @return BaseAccount
     */
    public function setCity(string $city): BaseAccount
    {
        $this->city = $city;
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
     * @return BaseAccount
     */
    public function setZipcode(string $zipcode): BaseAccount
    {
        $this->zipcode = $zipcode;
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
     * @return BaseAccount
     */
    public function setEnable(int $enable): BaseAccount
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
     * @return BaseAccount
     */
    public function setEnableTrading(int $enable_trading): BaseAccount
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
     * @return BaseAccount
     */
    public function setBalance(float $balance): BaseAccount
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
     * @return BaseAccount
     */
    public function setComment(string $comment): BaseAccount
    {
        $this->comment = $comment;
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
     * @return BaseAccount
     */
    public function setEnableChangePassword(int $enable_change_password): BaseAccount
    {
        $this->enable_change_password = $enable_change_password;
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
     * @return BaseAccount
     */
    public function setAgentAccount(int $agent_account): BaseAccount
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
     * @return BaseAccount
     */
    public function setId(string $id): BaseAccount
    {
        $this->id = $id;
        return $this;
    }


}
