<?php

namespace Ram\WIK\Mt5Response\DealHistory;

use Ram\WIK\Mt5Response\BaseResponse;

class DealHistory extends BaseResponse
{
    protected DealData $Data;

    /**
     * @return \Ram\WIK\Mt5Response\DealHistory\DealData
     */
    public function getData(): DealData
    {
        return $this->Data;
    }

    /**
     * @param \Ram\WIK\Mt5Response\DealHistory\DealData $Data
     * @return DealHistory
     */
    public function setData(DealData $Data): DealHistory
    {
        $this->Data = $Data;
        return $this;
    }


}
