<?php

namespace Ram\WIK\Request;

class GetGroupRequest extends BaseRequest
{
    protected string $action = 'getgroup';
    protected string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return GetGroupRequest
     */
    public function setName(string $name): GetGroupRequest
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }


}
