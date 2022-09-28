<?php

namespace Ram\WIK\Response\GetTradingVolume;

use Ram\WIK\Response\BaseResponse;

class GetTradingVolumeResponse extends BaseResponse
{
    protected int $users;
    protected string $failed_logins;

    /**
     * @var \Ram\WIK\Response\GetTradingVolume\TradingVolumeScsvLine[]
     */
    protected array $answer;

    /**
     * @return int
     */
    public function getUsers(): int
    {
        return $this->users;
    }

    /**
     * @param int $users
     * @return GetTradingVolumeResponse
     */
    public function setUsers(int $users): GetTradingVolumeResponse
    {
        $this->users = $users;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailedLogins(): string
    {
        return $this->failed_logins;
    }

    /**
     * @param string $failed_logins
     * @return GetTradingVolumeResponse
     */
    public function setFailedLogins(string $failed_logins): GetTradingVolumeResponse
    {
        $this->failed_logins = $failed_logins;
        return $this;
    }

    /**
     * @return array
     */
    public function getAnswer(): array
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     * @return GetTradingVolumeResponse
     */
    public function setAnswer(string $answer): GetTradingVolumeResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new GetTradingVolumeResponse($line);
        }
        return $this;
    }


}
