<?php

namespace Ram\WIK\Request;

class GetUsersOnlineRequest extends BaseRequest
{
    protected string $action = 'getusersonline';

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }


}
