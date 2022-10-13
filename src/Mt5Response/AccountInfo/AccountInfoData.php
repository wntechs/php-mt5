<?php

namespace Ram\WIK\Mt5Response\AccountInfo;


use Ram\WIK\Mt5Response\BaseResponse;

class AccountInfoData extends BaseResponse
{
    protected AccountInfo $Data;

    /**
     * @return \Ram\WIK\Mt5Response\AccountInfo\AccountInfo
     */
    public function getData(): AccountInfo
    {
        return $this->Data;
    }

    /**
     * @param \Ram\WIK\Mt5Response\AccountInfo\AccountInfo $Data
     * @return AccountInfoData
     */
    public function setData(AccountInfo $Data): AccountInfoData
    {
        $this->Data = $Data;
        return $this;
    }


}
