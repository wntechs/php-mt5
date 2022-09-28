<?php

namespace Ram\WIK\Request;

class GetLeverageAndGroupRequest extends BaseRequest
{
    protected string $action = 'getleverageandgroup';

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return GetLeverageAndGroupRequest
     */
    public function setAction(string $action): GetLeverageAndGroupRequest
    {
        $this->action = $action;
        return $this;
    }


}
