<?php

namespace Ram\WIK\Mt5Response\DealHistory;

use Ram\WIK\Arrayable;

class DealData extends Arrayable
{
    /**
     * @var \Ram\WIK\Mt5Response\DealHistory\Deal[]
     */
    protected array $delas;

    /**
     * @return \Ram\WIK\Mt5Response\DealHistory\Deal[]
     */
    public function getDelas(): array
    {
        return $this->delas;
    }

    /**
     * @param \Ram\WIK\Mt5Response\DealHistory\Deal[] $delas
     * @return DealData
     */
    public function setDelas(array $delas): DealData
    {
        $this->delas = $delas;
        return $this;
    }


}
