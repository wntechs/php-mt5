<?php

namespace Ram\WIK\Response;

class GetVersionResponse extends BaseResponse
{
    protected string $version = '';

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return GetVersionResponse
     */
    public function setVersion(string $version): GetVersionResponse
    {
        $this->version = $version;
        return $this;
    }


}
