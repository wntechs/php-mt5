<?php

namespace Ram\WIK\Response\GetUsersOnline;

use Ram\WIK\Response\BaseResponse;

class GetUsersOnlineResponse extends BaseResponse
{
    protected int $count;

    /**
     * @var \Ram\WIK\Response\GetUsersOnline\UserOnlineScsvLine[]
     */
    protected array $answer;

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return GetUsersOnlineResponse
     */
    public function setCount(int $count): GetUsersOnlineResponse
    {
        $this->count = $count;
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
     * @return GetUsersOnlineResponse
     */
    public function setAnswer(string $answer): GetUsersOnlineResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new GetUsersOnlineResponse($line);
        }
        return $this;
    }



}
