<?php

namespace Ram\WIK\Response;

class ChangeCreditResponse extends BaseResponse
{

    protected string $login = '';
    protected string $deal = '';
    protected string $newcredit ='';

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return ChangeCreditResponse
     */
    public function setLogin(string $login): ChangeCreditResponse
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
     * @return ChangeCreditResponse
     */
    public function setDeal(string $deal): ChangeCreditResponse
    {
        $this->deal = $deal;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewcredit(): string
    {
        return $this->newcredit;
    }

    /**
     * @param string $newcredit
     * @return ChangeCreditResponse
     */
    public function setNewcredit(string $newcredit): ChangeCreditResponse
    {
        $this->newcredit = $newcredit;
        return $this;
    }



}
