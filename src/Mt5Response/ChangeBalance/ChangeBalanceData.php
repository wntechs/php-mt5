<?php

namespace Ram\WIK\Mt5Response\ChangeBalance;

use Ram\WIK\Arrayable;

class ChangeBalanceData extends Arrayable
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
     * @return ChangeBalanceData
     */
    public function setLogin(int $login): ChangeBalanceData
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
     * @return ChangeBalanceData
     */
    public function setDeal(int $deal): ChangeBalanceData
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
     * @return ChangeBalanceData
     */
    public function setNewCredit(float $new_credit): ChangeBalanceData
    {
        $this->new_credit = $new_credit;
        return $this;
    }


}
