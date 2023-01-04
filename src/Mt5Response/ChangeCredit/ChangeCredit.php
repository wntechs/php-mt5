<?php

namespace Ram\WIK\Mt5Response\ChangeCredit;

use Ram\WIK\Mt5Response\BaseResponse;

class ChangeCredit extends BaseResponse
{
    protected ChangeCreditData $Data;

    /**
     * @return \Ram\WIK\Mt5Response\ChangeCredit\ChangeCreditData
     */
    public function getData(): ChangeCreditData
    {
        return $this->Data;
    }

    /**
     * @param \Ram\WIK\Mt5Response\ChangeCredit\ChangeCreditData $Data
     * @return ChangeCredit
     */
    public function setData(ChangeCreditData $Data): ChangeCredit
    {
        $this->Data = $Data;
        return $this;
    }


}
