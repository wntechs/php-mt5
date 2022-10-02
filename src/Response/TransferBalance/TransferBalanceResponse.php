<?php

namespace Ram\WIK\Response\TransferBalance;

use Ram\WIK\Response\BaseResponse;


class TransferBalanceResponse extends BaseResponse
{
    /**
     * @var \Ram\WIK\Response\TransferBalance\BalanceScsvLine[]
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
     * @return TransferBalanceResponse
     */
    public function setAnswer(string $answer): TransferBalanceResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new BalanceScsvLine($line);
        }
        return $this;
    }



}
