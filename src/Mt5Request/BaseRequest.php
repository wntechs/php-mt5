<?php
namespace Ram\WIK\Mt5Request;


use Ram\WIK\Arrayable;

class BaseRequest extends Arrayable
{
    protected int $request_id;

    /**
     * @return int
     */
    public function getRequestId(): int
    {
        return $this->request_id;
    }

    /**
     * @param int $request_id
     * @return BaseRequest
     */
    public function setRequestId(int $request_id): BaseRequest
    {
        $this->request_id = $request_id;
        return $this;
    }


}
