<?php

namespace Ram\WIK\Response;

use Ram\WIK\Arrayable;

class BaseResponse extends Arrayable
{
    use ResponseParser;
    protected string $request_id = '';
    protected int $size = 0;
    protected int $result = 0;
    protected string $error = "";

    public function __construct( string $response)
    {
        $this->parseResponse($response);
    }
    /**
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->request_id;
    }

    /**
     * @param string $request_id
     * @return BaseResponse
     */
    public function setRequestId(string $request_id): BaseResponse
    {
        $this->request_id = $request_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return BaseResponse
     */
    public function setSize(int $size): BaseResponse
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }

    /**
     * @param int $result
     * @return BaseResponse
     */
    public function setResult(int $result): BaseResponse
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * @param string $error
     * @return BaseResponse
     */
    public function setError(string $error): BaseResponse
    {
        $this->error = $error;
        return $this;
    }



}
