<?php

namespace Ram\WIK\Request;

class ModifyPendingRequest extends BaseRequest
{
    protected string $action = 'modifypending';

    protected string $order;
    protected float $sl;
    protected float $tp;
    protected float $price;

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
    public function getOrder(): string
    {
        return $this->order;
    }

    /**
     * @param string $order
     * @return ModifyPendingRequest
     */
    public function setOrder(string $order): ModifyPendingRequest
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return float
     */
    public function getSl(): float
    {
        return $this->sl;
    }

    /**
     * @param float $sl
     * @return ModifyPendingRequest
     */
    public function setSl(float $sl): ModifyPendingRequest
    {
        $this->sl = $sl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTp(): float
    {
        return $this->tp;
    }

    /**
     * @param float $tp
     * @return ModifyPendingRequest
     */
    public function setTp(float $tp): ModifyPendingRequest
    {
        $this->tp = $tp;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return ModifyPendingRequest
     */
    public function setPrice(float $price): ModifyPendingRequest
    {
        $this->price = $price;
        return $this;
    }



}
