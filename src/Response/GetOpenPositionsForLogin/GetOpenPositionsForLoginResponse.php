<?php

namespace Ram\WIK\Response\GetOpenPositionsForLogin;

use Ram\WIK\Response\BaseResponse;

class GetOpenPositionsForLoginResponse extends BaseResponse
{
    /**
     * @var \Ram\WIK\Response\GetOpenPositionsForLogin\OpenPositionScsvLine[]
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
     * @return GetOpenPositionsForLoginResponse
     */
    public function setAnswer(string $answer): GetOpenPositionsForLoginResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new OpenPositionScsvLine($line);
        }
        return $this;
    }



}
