<?php

namespace Ram\WIK\Mt5Response\Groups;

use Ram\WIK\Arrayable;
use Ram\WIK\Mt5Response\BaseResponse;

class GroupList extends BaseResponse
{

    protected GroupData $Data;

    /**
     * @return \Ram\WIK\Mt5Response\Groups\GroupData
     */
    public function getData(): GroupData
    {
        return $this->Data;
    }

    /**
     * @param \Ram\WIK\Mt5Response\Groups\GroupData $Data
     */
    public function setData(GroupData $Data): void
    {
        $this->Data = $Data;
    }




}
