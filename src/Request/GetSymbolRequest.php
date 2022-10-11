<?php

namespace Ram\WIK\Request;

class GetSymbolRequest extends BaseRequest
{
    protected string $action = 'getsymbols';

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }


}
