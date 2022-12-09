<?php

namespace Ram\WIK\Mt5Response\ChangeBalance;

use Ram\WIK\Mt5Response\BaseResponse;

class ChangeBalance extends BaseResponse
{
    protected ChangeBalanceData $Data;

    /**
     * @return ChangeBalanceData
     */
    public function getData(): ChangeBalanceData
    {
        return $this->Data;
    }

    /**
     * @param ChangeBalanceData $Data
     * @return ChangeBalance
     */
    public function setData(ChangeBalanceData $Data): ChangeBalance
    {
        $this->Data = $Data;
        return $this;
    }


}
