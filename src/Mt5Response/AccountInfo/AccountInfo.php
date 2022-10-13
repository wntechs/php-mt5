<?php

namespace Ram\WIK\Mt5Response\AccountInfo;

use Ram\WIK\Mt5Response\Accounts\BaseAccount;

class AccountInfo extends BaseAccount
{
    protected int $regdate;
    protected float $free_margin;
    protected int $opened_positions;
    protected int $lastdate;
    protected int $rights;

    /**
     * @return int
     */
    public function getRegdate(): int
    {
        return $this->regdate;
    }

    /**
     * @param int $regdate
     * @return AccountInfo
     */
    public function setRegdate(int $regdate): AccountInfo
    {
        $this->regdate = $regdate;
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
     * @return AccountInfo
     */
    public function setFreeMargin(float $free_margin): AccountInfo
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
     * @return AccountInfo
     */
    public function setOpenedPositions(int $opened_positions): AccountInfo
    {
        $this->opened_positions = $opened_positions;
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
     * @return AccountInfo
     */
    public function setLastdate(int $lastdate): AccountInfo
    {
        $this->lastdate = $lastdate;
        return $this;
    }

    /**
     * @return int
     */
    public function getRights(): int
    {
        return $this->rights;
    }

    /**
     * @param int $rights
     * @return AccountInfo
     */
    public function setRights(int $rights): AccountInfo
    {
        $this->rights = $rights;
        return $this;
    }


}
