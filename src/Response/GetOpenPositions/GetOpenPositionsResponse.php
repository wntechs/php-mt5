<?php

namespace Ram\WIK\Response\GetOpenPositions;

use Ram\WIK\Response\BaseResponse;

class GetOpenPositionsResponse extends BaseResponse
{
    /**
     * @var \Ram\WIK\Response\GetOpenPositionsForLogin\OpenPositionScsvLine[]
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
     * @return \Ram\WIK\Response\GetOpenPositions\GetOpenPositionsResponse
     */
    public function setAnswer(string $answer): GetOpenPositionsResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new GetOpenPositionsResponse($line);
        }
        return $this;
    }



}
