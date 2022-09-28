<?php

namespace Ram\WIK\Request;

class GetAllBalancesRequest extends BaseRequest
{
    protected string $action = 'getallbalances';

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }


}
