<?php

namespace Ram\WIK\Request;

class InfoRequest extends BaseRequest
{
    protected string $action = 'info';

    protected string $method;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return InfoRequest
     */
    public function setMethod(string $method): InfoRequest
    {
        $this->method = $method;
        return $this;
    }



}
