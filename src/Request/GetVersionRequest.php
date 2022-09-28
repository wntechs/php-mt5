<?php

namespace Ram\WIK\Request;

class GetVersionRequest extends BaseRequest
{
    protected string $action = 'getversion';

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }


}
