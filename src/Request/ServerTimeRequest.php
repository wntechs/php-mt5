<?php

namespace Ram\WIK\Request;

class ServerTimeRequest extends BaseRequest
{
    protected string $action = 'servertime';

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }


}
