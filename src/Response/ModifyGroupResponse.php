<?php

namespace Ram\WIK\Response;

class ModifyGroupResponse extends BaseResponse
{
    protected string $group = '';

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     * @return ModifyGroupResponse
     */
    public function setGroup(string $group): ModifyGroupResponse
    {
        $this->group = $group;
        return $this;
    }



}
