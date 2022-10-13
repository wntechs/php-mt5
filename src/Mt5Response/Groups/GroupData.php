<?php

namespace Ram\WIK\Mt5Response\Groups;

use Ram\WIK\Arrayable;

class GroupData extends Arrayable
{
    /**
     * @var \Ram\WIK\Mt5Response\Groups\Group[]
     */
    protected array $groups;

    /**
     * @return array
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @param \Ram\WIK\Mt5Response\Groups\Group[] $groups
     */
    public function setGroups(array $groups): void
    {
        $this->groups = $groups;
    }




}
