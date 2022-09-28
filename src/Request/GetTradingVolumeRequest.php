<?php

namespace Ram\WIK\Request;

class GetTradingVolumeRequest extends BaseRequest
{
    protected string $action = 'gettradingvolume';

    /**
     * @var string[]
     */
    protected array $login;

    protected int $from;
    protected int $to;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return array
     */
    public function getLogin(): array
    {
        return $this->login;
    }

    /**
     * @param array $login
     * @return GetTradingVolumeRequest
     */
    public function setLogin(array $login): GetTradingVolumeRequest
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return int
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * @param int $from
     * @return GetTradingVolumeRequest
     */
    public function setFrom(int $from): GetTradingVolumeRequest
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return int
     */
    public function getTo(): int
    {
        return $this->to;
    }

    /**
     * @param int $to
     * @return GetTradingVolumeRequest
     */
    public function setTo(int $to): GetTradingVolumeRequest
    {
        $this->to = $to;
        return $this;
    }



}
