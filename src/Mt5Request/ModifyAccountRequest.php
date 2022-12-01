<?php

namespace Ram\WIK\Mt5Request;

class ModifyAccountRequest extends BaseRequest
{


    protected string $login;
    protected string $group;
    protected int $leverage;
    protected string $agent_account;
    protected string $address;
    protected string $name;
    protected string $email;
    protected string $status;
    protected string $city;
    protected string $state;
    protected string $zipcode;
    protected string $country;
    protected string $phone;
    protected string $password_phone;
    protected string $comment;

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return ModifyAccountRequest
     */
    public function setLogin(string $login): ModifyAccountRequest
    {
        $this->login = $login;
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
     * @return ModifyAccountRequest
     */
    public function setGroup(string $group): ModifyAccountRequest
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
     * @return ModifyAccountRequest
     */
    public function setLeverage(int $leverage): ModifyAccountRequest
    {
        $this->leverage = $leverage;
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
     * @return ModifyAccountRequest
     */
    public function setAgentAccount(string $agent_account): ModifyAccountRequest
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
     * @return ModifyAccountRequest
     */
    public function setAddress(string $address): ModifyAccountRequest
    {
        $this->address = $address;
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
     * @return ModifyAccountRequest
     */
    public function setName(string $name): ModifyAccountRequest
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
     * @return ModifyAccountRequest
     */
    public function setEmail(string $email): ModifyAccountRequest
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
     * @return ModifyAccountRequest
     */
    public function setStatus(string $status): ModifyAccountRequest
    {
        $this->status = $status;
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
     * @return ModifyAccountRequest
     */
    public function setCity(string $city): ModifyAccountRequest
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
     * @return ModifyAccountRequest
     */
    public function setState(string $state): ModifyAccountRequest
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
     * @return ModifyAccountRequest
     */
    public function setZipcode(string $zipcode): ModifyAccountRequest
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
     * @return ModifyAccountRequest
     */
    public function setCountry(string $country): ModifyAccountRequest
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
     * @return ModifyAccountRequest
     */
    public function setPhone(string $phone): ModifyAccountRequest
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordPhone(): string
    {
        return $this->password_phone;
    }

    /**
     * @param string $password_phone
     * @return ModifyAccountRequest
     */
    public function setPasswordPhone(string $password_phone): ModifyAccountRequest
    {
        $this->password_phone = $password_phone;
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
     * @return ModifyAccountRequest
     */
    public function setComment(string $comment): ModifyAccountRequest
    {
        $this->comment = $comment;
        return $this;
    }







}
