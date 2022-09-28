<?php

namespace Ram\WIK\Response\GetSymbols;

use Ram\WIK\Response\BaseResponse;
use Ram\WIK\Response\ResponseParser;

class GetSymbolsResponse extends BaseResponse
{
    protected int $symbolsCount;
    /**
     * @var \Ram\WIK\Response\GetSymbols\SymbolScsvLine[]
     */
    protected array $answer;




    /**
     * @return int
     */
    public function getSymbolsCount(): int
    {
        return $this->symbolsCount;
    }

    /**
     * @param int $symbolsCount
     * @return GetSymbolsResponse
     */
    public function setSymbolsCount(int $symbolsCount): GetSymbolsResponse
    {
        $this->symbolsCount = $symbolsCount;
        return $this;
    }

    /**
     * @return \Ram\WIK\Response\GetSymbols\SymbolScsvLine[]
     */
    public function getAnswer(): array
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     * @return GetSymbolsResponse
     */
    public function setAnswer(string $answer): GetSymbolsResponse
    {

        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
            $this->answer[] = new SymbolScsvLine($line);
        }
        return $this;
    }



}
