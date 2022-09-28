<?php

namespace Ram\WIK\Request;

class GetLoginsByGroupRequest extends BaseRequest
{
    protected string $action = 'getloginsbygroup';
    protected string $group;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     * @return GetLoginsByGroupRequest
     */
    public function setGroup(string $group): GetLoginsByGroupRequest
    {
        $this->group = $group;
        return $this;
    }



}
