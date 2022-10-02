<?php

namespace Ram\WIK\Response\GetAllBalances;

use Ram\WIK\Response\BaseResponse;

class GetBalancesResponse extends BaseResponse
{
    /**
     * @var \Ram\WIK\Response\GetAllBalances\GetBalanceScsvLine[]
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
     * @return GetBalancesResponse
     */
    public function setAnswer(string $answer): GetBalancesResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new GetBalanceScsvLine($line);
        }
        return $this;
    }


}
