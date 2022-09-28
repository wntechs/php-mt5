<?php

namespace Ram\WIK\Request;

class GetOpenPositionsRequest extends BaseRequest
{
    protected string $action = 'getopenpositions';

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }



}
