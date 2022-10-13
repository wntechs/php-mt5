<?php

namespace Ram\WIK\Mt5Response;

use Ram\WIK\Arrayable;

class BaseResponse extends Arrayable
{
    protected int $StatusCode;
    protected string $Message;

    /**
     * @var string[]
     */
    protected array $Errors;

    protected string $RequestId;

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     */
    public function setStatusCode(int $StatusCode): void
    {
        $this->StatusCode = $StatusCode;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     */
    public function setMessage(string $Message): void
    {
        $this->Message = $Message;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->Errors;
    }

    /**
     * @param array $Errors
     */
    public function setErrors(array $Errors): void
    {
        $this->Errors = $Errors;
    }

    /**
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->RequestId;
    }

    /**
     * @param string $RequestId
     */
    public function setRequestId(string $RequestId): void
    {
        $this->RequestId = $RequestId;
    }


}
