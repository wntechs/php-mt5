<?php

namespace Ram\WIK\Mt5Response\Positions;

use Ram\WIK\Arrayable;

class PositionData extends Arrayable
{
    /**
     * @var \Ram\WIK\Mt5Response\Positions\PositionItem[]
     */
    protected array $positions;

    /**
     * @return \Ram\WIK\Mt5Response\Positions\PositionItem[]
     */
    public function getPositions(): array
    {
        return $this->positions;
    }

    /**
     * @param \Ram\WIK\Mt5Response\Positions\PositionItem[] $positions
     * @return PositionData
     */
    public function setPositions(array $positions): PositionData
    {
        $this->positions = $positions;
        return $this;
    }


}
