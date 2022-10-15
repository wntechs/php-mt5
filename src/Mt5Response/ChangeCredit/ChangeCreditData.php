<?php

namespace Ram\WIK\Mt5Response\ChangeCredit;

use Ram\WIK\Arrayable;

class ChangeCreditData extends Arrayable
{
    protected int $login;
    protected int $deal;
    protected float $new_credit;

    /**
     * @return int
     */
    public function getLogin(): int
    {
        return $this->login;
    }

    /**
     * @param int $login
     * @return ChangeCreditData
     */
    public function setLogin(int $login): ChangeCreditData
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeal(): int
    {
        return $this->deal;
    }

    /**
     * @param int $deal
     * @return ChangeCreditData
     */
    public function setDeal(int $deal): ChangeCreditData
    {
        $this->deal = $deal;
        return $this;
    }

    /**
     * @return float
     */
    public function getNewCredit(): float
    {
        return $this->new_credit;
    }

    /**
     * @param float $new_credit
     * @return ChangeCreditData
     */
    public function setNewCredit(float $new_credit): ChangeCreditData
    {
        $this->new_credit = $new_credit;
        return $this;
    }


}
