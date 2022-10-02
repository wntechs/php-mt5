<?php

namespace Ram\WIK\Response;

class GetAccountInfoResponse extends BaseResponse
{
    protected string $login ='';
    protected string $name ='';
    protected string $email ='';
    protected string $group ='';
    protected int $leverage = 0;
    protected string $regdate ='';
    protected string $country ='';
    protected string $state ='';
    protected string $address ='';
    protected string $phone ='';
    protected string $city ='';
    protected string $zipcode ='';
    protected string $rights ='';
    protected float $balance = 0;
    protected string $comment ='';
    protected float $free_margin = 0;
    protected string $opened_positions ='';
    protected string $agent_account ='';
    protected string $lastdate ='';
    protected string $id ='';

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return GetAccountInfoResponse
     */
    public function setLogin(string $login): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setName(string $name): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setEmail(string $email): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setGroup(string $group): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setLeverage(int $leverage): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setRegdate(string $regdate): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setCountry(string $country): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setState(string $state): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setAddress(string $address): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setPhone(string $phone): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setCity(string $city): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setZipcode(string $zipcode): GetAccountInfoResponse
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRights(): string
    {
        return $this->rights;
    }

    /**
     * @param string $rights
     * @return GetAccountInfoResponse
     */
    public function setRights(string $rights): GetAccountInfoResponse
    {
        $this->rights = $rights;
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
     * @return GetAccountInfoResponse
     */
    public function setBalance(float $balance): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setComment(string $comment): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setFreeMargin(float $free_margin): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setOpenedPositions(string $opened_positions): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setAgentAccount(string $agent_account): GetAccountInfoResponse
    {
        $this->agent_account = $agent_account;
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
     * @return GetAccountInfoResponse
     */
    public function setLastdate(string $lastdate): GetAccountInfoResponse
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
     * @return GetAccountInfoResponse
     */
    public function setId(string $id): GetAccountInfoResponse
    {
        $this->id = $id;
        return $this;
    }



}
