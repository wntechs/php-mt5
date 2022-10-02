<?php

namespace Ram\WIK\Response\GetAccounts;

use Ram\WIK\Response\BaseResponse;
use Ram\WIK\Response\ResponseParser;

class GetAccountsResponse extends BaseResponse
{
    /**
     * @var \Ram\WIK\Response\GetAccounts\AccountScsvLine[]
     */
    protected array $answer = [];


    /**
     * @return array
     */
    public function getAnswer(): array
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     * @return GetAccountsResponse
     */
    public function setAnswer(string $answer): GetAccountsResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
            $this->answer[] = new AccountScsvLine($line);
        }
        return $this;
    }


}
