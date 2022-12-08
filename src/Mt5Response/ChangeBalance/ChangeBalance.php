<?php

namespace Ram\WIK\Mt5Response\ChangeBalance;

use Ram\WIK\Mt5Response\BaseResponse;

class ChangeBalance extends BaseResponse
{
    protected ChangeBalanceData $Data;

    /**
     * @return \Ram\WIK\Mt5Response\ChangeBalance\ChangeBalanceData
     */
    public function getData(): ChangeBalance
    {
        return $this->Data;
    }

    /**
     * @param \Ram\WIK\Mt5Response\ChangeBalance\ChangeBalanceData $Data
     * @return ChangeBalance
     */
    public function setData(ChangeBalanceData $Data): ChangeBalance
    {
        $this->Data = $Data;
        return $this;
    }


}
