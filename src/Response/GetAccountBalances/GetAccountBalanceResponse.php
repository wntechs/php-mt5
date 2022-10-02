<?php

namespace Ram\WIK\Response\GetAccountBalances;

use Ram\WIK\Response\BaseResponse;

class GetAccountBalanceResponse extends BaseResponse
{
    protected int $users = 0;

    /**
     * @var \Ram\WIK\Response\GetAccountBalances\BalanceScsvLine[]
     */
    protected array $answer = [];

    /**
     * @return int
     */
    public function getUsers(): int
    {
        return $this->users;
    }

    /**
     * @param int $users
     * @return GetAccountBalanceResponse
     */
    public function setUsers(int $users): GetAccountBalanceResponse
    {
        $this->users = $users;
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
     * @return GetAccountBalanceResponse
     */
    public function setAnswer(string $answer): GetAccountBalanceResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new BalanceScsvLine($line);
        }
        return $this;
    }



}
