<?php

namespace Ram\WIK\Mt5Response\AccountInfoEx;

use Ram\WIK\Mt5Response\BaseResponse;

class AccountInfoExData extends BaseResponse
{
    /**
     * @var \Ram\WIK\Mt5Response\AccountInfoEx\AccountInfoEx
     */
    protected AccountInfoEx $Data;

    /**
     * @return \Ram\WIK\Mt5Response\AccountInfoEx\AccountInfoEx
     */
    public function getData(): AccountInfoEx
    {
        return $this->Data;
    }

    /**
     * @param \Ram\WIK\Mt5Response\AccountInfoEx\AccountInfoEx $Data
     * @return AccountInfoExData
     */
    public function setData(AccountInfoEx $Data): AccountInfoExData
    {
        $this->Data = $Data;
        return $this;
    }



}
