<?php

namespace Ram\WIK\Mt5Response\Balances;

use Ram\WIK\Mt5Response\BaseResponse;

class BalanceResponse extends BaseResponse
{
    protected BalanceData $Data;

    /**
     * @return \Ram\WIK\Mt5Response\Balances\BalanceData
     */
    public function getData(): BalanceData
    {
        return $this->Data;
    }

    /**
     * @param \Ram\WIK\Mt5Response\Balances\BalanceData $Data
     * @return BalanceResponse
     */
    public function setData(BalanceData $Data): BalanceResponse
    {
        $this->Data = $Data;
        return $this;
    }


}
