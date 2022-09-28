<?php

namespace Ram\WIK\Request;

class ClosePositionRequest extends BaseRequest
{
    protected string $action = 'closeposition';

    /**
     * @var string[]
     */
    protected array $position;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return ClosePositionRequest
     */
    public function setAction(string $action): ClosePositionRequest
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return array
     */
    public function getPosition(): array
    {
        return $this->position;
    }

    /**
     * @param array $position
     * @return ClosePositionRequest
     */
    public function setPosition(array $position): ClosePositionRequest
    {
        $this->position = $position;
        return $this;
    }



}
