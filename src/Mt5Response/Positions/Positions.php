<?php

namespace Ram\WIK\Mt5Response\Positions;

use Ram\WIK\Mt5Response\BaseResponse;

class Positions extends BaseResponse
{
    protected PositionData $Data;

    /**
     * @return \Ram\WIK\Mt5Response\Positions\PositionData
     */
    public function getData(): PositionData
    {
        return $this->Data;
    }

    /**
     * @param \Ram\WIK\Mt5Response\Positions\PositionData $Data
     * @return Positions
     */
    public function setData(PositionData $Data): Positions
    {
        $this->Data = $Data;
        return $this;
    }


}
