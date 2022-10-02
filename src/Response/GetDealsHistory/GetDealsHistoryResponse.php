<?php

namespace Ram\WIK\Response\GetDealsHistory;

use Ram\WIK\Response\BaseResponse;

class GetDealsHistoryResponse extends BaseResponse
{
    protected int $items = 0;
    protected string $failed_logins = '';
    /**
     * @var \Ram\WIK\Response\GetDealsHistory\DealHistoryScsvLine[]
     */
    protected array $answer = [];

    /**
     * @return int
     */
    public function getItems(): int
    {
        return $this->items;
    }

    /**
     * @param int $items
     * @return GetDealsHistoryResponse
     */
    public function setItems(int $items): GetDealsHistoryResponse
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailedLogins(): string
    {
        return $this->failed_logins;
    }

    /**
     * @param string $failed_logins
     * @return GetDealsHistoryResponse
     */
    public function setFailedLogins(string $failed_logins): GetDealsHistoryResponse
    {
        $this->failed_logins = $failed_logins;
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
     * @return GetDealsHistoryResponse
     */
    public function setAnswer(string $answer): GetDealsHistoryResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new DealHistoryScsvLine($line);
        }
        return $this;
    }


}
