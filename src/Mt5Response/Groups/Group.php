<?php

namespace Ram\WIK\Mt5Response\Groups;

use Ram\WIK\Arrayable;

class Group extends Arrayable
{
    protected string $group;
    protected string $currency;
    protected int $enable;

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     */
    public function setGroup(string $group): void
    {
        $this->group = $group;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getEnable(): int
    {
        return $this->enable;
    }

    /**
     * @param int $enable
     */
    public function setEnable(int $enable): void
    {
        $this->enable = $enable;
    }


}
