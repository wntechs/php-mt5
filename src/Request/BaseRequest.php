<?php
namespace Ram\WIK\Request;


use Ram\WIK\Arrayable;

class BaseRequest extends Arrayable
{
    protected string $request_id;
    protected string $hash;

    /**
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->request_id;
    }

    /**
     * @param string $request_id
     * @return BaseRequest
     */
    public function setRequestId(string $request_id): BaseRequest
    {
        $this->request_id = $request_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     * @return BaseRequest
     */
    public function setHash(string $hash): BaseRequest
    {
        $this->hash = $hash;
        return $this;
    }




}
