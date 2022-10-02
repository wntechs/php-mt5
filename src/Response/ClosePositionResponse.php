<?php

namespace Ram\WIK\Response;

class ClosePositionResponse extends BaseResponse
{
    /**
     * @var string[]
     */
    protected array $position = [];

    protected string $failed_positions = '';

    /**
     * @return array
     */
    public function getPosition(): array
    {
        return $this->position;
    }

    /**
     * @param array $position
     * @return ClosePositionResponse
     */
    public function setPosition(array $position): ClosePositionResponse
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailedPositions(): string
    {
        return $this->failed_positions;
    }

    /**
     * @param string $failed_positions
     * @return ClosePositionResponse
     */
    public function setFailedPositions(string $failed_positions): ClosePositionResponse
    {
        $this->failed_positions = $failed_positions;
        return $this;
    }



}
