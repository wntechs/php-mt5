<?php

namespace Ram\WIK\Mt5Response\ChangePassword;

use Ram\WIK\Mt5Response\BaseResponse;
use Ram\WIK\Mt5Response\CreateAccount\LoginData;

class ChangePassword extends BaseResponse
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
     * @return ChangePassword
     */
    public function setData(LoginData $Data): ChangePassword
    {
        $this->Data = $Data;
        return $this;
    }



}
