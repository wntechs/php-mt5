<?php

namespace Ram\WIK\Mt5Response\ModifyAccount;

use Ram\WIK\Mt5Response\BaseResponse;

class ModifyAccount extends BaseResponse
{
    protected LoginData $Data;

    /**
     * @return \Ram\WIK\Mt5Response\CreateAccount\LoginData
     */
    public function getData(): LoginData
    {
        return $this->Data;
    }

    /**
     * @param \Ram\WIK\Mt5Response\CreateAccount\LoginData $Data
     * @return ModifyAccount
     */
    public function setData(LoginData $Data): ModifyAccount
    {
        $this->Data = $Data;
        return $this;
    }


}
