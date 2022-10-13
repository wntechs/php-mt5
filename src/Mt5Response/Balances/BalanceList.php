<?php

namespace Ram\WIK\Mt5Response\Balances;

use Ram\WIK\Mt5Response\BaseResponse;

class BalanceList extends BaseResponse
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
     * @return BalanceList
     */
    public function setData(BalanceData $Data): BalanceList
    {
        $this->Data = $Data;
        return $this;
    }


}
