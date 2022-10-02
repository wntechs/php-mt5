<?php

namespace Ram\WIK\Response;

class CreateGroupResponse extends BaseResponse
{
    protected string $name = '';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CreateGroupResponse
     */
    public function setName(string $name): CreateGroupResponse
    {
        $this->name = $name;
        return $this;
    }



}
