<?php

namespace Ram\WIK\Response\GetChartHistory;

use Ram\WIK\Response\BaseResponse;

class GetChartHistoryResponse extends BaseResponse
{
    protected int $count = 0;

    /**
     * @var \Ram\WIK\Response\GetChartHistory\ChartHistoryScsvLine[]
     */
    protected array $answer = [];

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return GetChartHistoryResponse
     */
    public function setCount(int $count): GetChartHistoryResponse
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
     * @return GetChartHistoryResponse
     */
    public function setAnswer(string $answer): GetChartHistoryResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new ChartHistoryScsvLine($line);
        }
        return $this;
    }



}
