<?php

namespace Ram\WIK\Response;

class GetLoginsByGroupResponse extends BaseResponse
{
    protected string $logins = '';

    /**
     * @return string
     */
    public function getLogins(): string
    {
        return $this->logins;
    }

    /**
     * @param string $logins
     * @return GetLoginsByGroupResponse
     */
    public function setLogins(string $logins): GetLoginsByGroupResponse
    {
        $this->logins = $logins;
        return $this;
    }


}
