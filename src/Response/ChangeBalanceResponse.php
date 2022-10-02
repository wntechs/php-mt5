<?php

namespace Ram\WIK\Response;

class ChangeBalanceResponse extends BaseResponse
{

    protected string $login = '';
    protected string $deal = '';
    protected string $newbalance = '';


    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return ChangeBalanceResponse
     */
    public function setLogin(string $login): ChangeBalanceResponse
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeal(): string
    {
        return $this->deal;
    }

    /**
     * @param string $deal
     * @return ChangeBalanceResponse
     */
    public function setDeal(string $deal): ChangeBalanceResponse
    {
        $this->deal = $deal;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewbalance(): string
    {
        return $this->newbalance;
    }

    /**
     * @param string $newbalance
     * @return ChangeBalanceResponse
     */
    public function setNewbalance(string $newbalance): ChangeBalanceResponse
    {
        $this->newbalance = $newbalance;
        return $this;
    }


}
