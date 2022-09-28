<?php

namespace Ram\WIK\Response\BulkChangeBalance;

use Ram\WIK\Response\BaseResponse;

class BulkChangeBalanceResponse extends BaseResponse
{
    /**
     * @var \Ram\WIK\Response\BulkChangeBalance\ChangeBalanceScsvLine[]
     */
    protected array $answer;

    /**
     * @return array
     */
    public function getAnswer(): array
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     * @return BulkChangeBalanceResponse
     */
    public function setAnswer(string $answer): BulkChangeBalanceResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new BulkChangeBalanceResponse($line);
        }
        return $this;
    }


}
