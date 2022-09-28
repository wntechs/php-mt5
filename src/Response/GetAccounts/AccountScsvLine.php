<?php

namespace Ram\WIK\Response\GetAccounts;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;


class AccountScsvLine extends Arrayable
{
    use ScsvParser;

    private array $keys = ['login', 'name', 'email', 'group', 'leverage', 'registration', 'country', 'state','address',
        'city', 'zipcode', 'enable', 'enable_trading', 'balance','comment', 'enable_change_password', 'agent_account',
        'lastaccess', 'id'];
    protected string $login;
    protected string $name;
    protected string $email;
    protected string $group;
    protected int $leverage;
    protected int $registration;
    protected string $country;
    protected string $state;
    protected string $address;
    protected string $city;
    protected string $zipcode;
    protected int $enable;
    protected int $enable_trading;
    protected float $balance;
    protected string $comment;
    protected int $enable_change_password;
    protected string $agent_account;
    protected string $lastaccess;
    protected string $id;

    public function __construct(string $line)
    {
        $this->parseCsv($line);
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return AccountScsvLine
     */
    public function setLogin(string $login): AccountScsvLine
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
     * @return AccountScsvLine
     */
    public function setName(string $name): AccountScsvLine
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
     * @return AccountScsvLine
     */
    public function setEmail(string $email): AccountScsvLine
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
     * @return AccountScsvLine
     */
    public function setGroup(string $group): AccountScsvLine
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
     * @return AccountScsvLine
     */
    public function setLeverage(int $leverage): AccountScsvLine
    {
        $this->leverage = $leverage;
        return $this;
    }

    /**
     * @return int
     */
    public function getRegistration(): int
    {
        return $this->registration;
    }

    /**
     * @param int $registration
     * @return AccountScsvLine
     */
    public function setRegistration(int $registration): AccountScsvLine
    {
        $this->registration = $registration;
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
     * @return AccountScsvLine
     */
    public function setCountry(string $country): AccountScsvLine
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
     * @return AccountScsvLine
     */
    public function setState(string $state): AccountScsvLine
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
     * @return AccountScsvLine
     */
    public function setAddress(string $address): AccountScsvLine
    {
        $this->address = $address;
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
     * @return AccountScsvLine
     */
    public function setCity(string $city): AccountScsvLine
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
     * @return AccountScsvLine
     */
    public function setZipcode(string $zipcode): AccountScsvLine
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
     * @return AccountScsvLine
     */
    public function setEnable(int $enable): AccountScsvLine
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
     * @return AccountScsvLine
     */
    public function setEnableTrading(int $enable_trading): AccountScsvLine
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
     * @return AccountScsvLine
     */
    public function setBalance(float $balance): AccountScsvLine
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
     * @return AccountScsvLine
     */
    public function setComment(string $comment): AccountScsvLine
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
     * @return AccountScsvLine
     */
    public function setEnableChangePassword(int $enable_change_password): AccountScsvLine
    {
        $this->enable_change_password = $enable_change_password;
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
     * @return AccountScsvLine
     */
    public function setAgentAccount(string $agent_account): AccountScsvLine
    {
        $this->agent_account = $agent_account;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastaccess(): string
    {
        return $this->lastaccess;
    }

    /**
     * @param string $lastaccess
     * @return AccountScsvLine
     */
    public function setLastaccess(string $lastaccess): AccountScsvLine
    {
        $this->lastaccess = $lastaccess;
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
     * @return AccountScsvLine
     */
    public function setId(string $id): AccountScsvLine
    {
        $this->id = $id;
        return $this;
    }





}
