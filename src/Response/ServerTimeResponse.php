<?php

namespace Ram\WIK\Response;

class ServerTimeResponse extends BaseResponse
{
    protected string $time;

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @param string $time
     * @return ServerTimeResponse
     */
    public function setTime(string $time): ServerTimeResponse
    {
        $this->time = $time;
        return $this;
    }


}
