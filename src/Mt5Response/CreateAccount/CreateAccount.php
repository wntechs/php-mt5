<?php

namespace Ram\WIK\Mt5Response\CreateAccount;

use Ram\WIK\Mt5Response\BaseResponse;

class CreateAccount extends BaseResponse
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
     * @return CreateAccount
     */
    public function setData(LoginData $Data): CreateAccount
    {
        $this->Data = $Data;
        return $this;
    }


}
