<?php

namespace Ram\WIK\Response\GetLeverageAndGroup;

use Ram\WIK\Response\BaseResponse;
use Ram\WIK\Response\ResponseParser;

class GetLeverageAndGroupResponse extends BaseResponse
{

    /**
     * @var \Ram\WIK\Response\GetLeverageAndGroup\LeverageAndGroupScsvLine[]
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
     * @return GetLeverageAndGroupResponse
     */
    public function setAnswer(string $answer): GetLeverageAndGroupResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new LeverageAndGroupScsvLine($line);
        }
        return $this;
    }


}
