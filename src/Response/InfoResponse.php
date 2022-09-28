<?php

namespace Ram\WIK\Response;

class InfoResponse extends BaseResponse
{
    protected string $info;

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * @param string $info
     * @return InfoResponse
     */
    public function setInfo(string $info): InfoResponse
    {
        $this->info = $info;
        return $this;
    }


}
