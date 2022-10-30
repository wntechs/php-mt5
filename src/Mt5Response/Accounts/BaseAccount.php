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
    protected int $regdate;
    protected string $country;
    protected string $state;
    protected string $address;
    protected string $phone;
    protected string $city;
    protected string $zipcode;
    protected float $balance;
    protected string $comment;
    protected float $free_margin;
    protected int $opened_positions;
    protected int $agent_account;
    protected int $lastdate;
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
     * @return int
     */
    public function getRegdate(): int
    {
        return $this->regdate;
    }

    /**
     * @param int $regdate
     * @return BaseAccount
     */
    public function setRegdate(int $regdate): BaseAccount
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
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return BaseAccount
     */
    public function setAddress(string $address): BaseAccount
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
     * @return BaseAccount
     */
    public function setPhone(string $phone): BaseAccount
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
     * @return float
     */
    public function getFreeMargin(): float
    {
        return $this->free_margin;
    }

    /**
     * @param float $free_margin
     * @return BaseAccount
     */
    public function setFreeMargin(float $free_margin): BaseAccount
    {
        $this->free_margin = $free_margin;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpenedPositions(): int
    {
        return $this->opened_positions;
    }

    /**
     * @param int $opened_positions
     * @return BaseAccount
     */
    public function setOpenedPositions(int $opened_positions): BaseAccount
    {
        $this->opened_positions = $opened_positions;
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
     * @return int
     */
    public function getLastdate(): int
    {
        return $this->lastdate;
    }

    /**
     * @param int $lastdate
     * @return BaseAccount
     */
    public function setLastdate(int $lastdate): BaseAccount
    {
        $this->lastdate = $lastdate;
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
