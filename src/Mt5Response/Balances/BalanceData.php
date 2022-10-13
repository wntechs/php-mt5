<?php

namespace Ram\WIK\Mt5Response\Balances;

use Ram\WIK\Arrayable;

class BalanceData extends Arrayable
{
    /**
     * @var \Ram\WIK\Mt5Response\Balances\Balance[]
     */
    protected array $balances;

    /**
     * @return array
     */
    public function getBalances(): array
    {
        return $this->balances;
    }

    /**
     * @param Balance[] $balances
     * @return BalanceData
     */
    public function setBalances(array $balances): BalanceData
    {
        $this->balances = $balances;
        return $this;
    }


}
