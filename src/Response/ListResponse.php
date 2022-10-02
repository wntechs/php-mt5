<?php

namespace Ram\WIK\Response;

class ListResponse extends BaseResponse
{
    /**
     * @var string[]
     */
    protected array $actions = [];

    /**
     * @return array
     */
    public function getActions(): array
    {
        return $this->actions;
    }

    /**
     * @param string $actions
     * @return ListResponse
     */
    public function setActions(string $actions): ListResponse
    {
        $this->actions = explode(',', $actions);
        return $this;
    }



}
