<?php

namespace Ram\WIK\Request;

class ListRequest extends BaseRequest
{
    protected string $action = 'list';

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }


}
