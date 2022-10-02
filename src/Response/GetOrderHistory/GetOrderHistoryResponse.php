<?php

namespace Ram\WIK\Response\GetOrderHistory;

use Ram\WIK\Response\BaseResponse;

class GetOrderHistoryResponse extends BaseResponse
{
    protected int $items;

    /**
     * @var \Ram\WIK\Response\GetOrderHistory\OrderHistoryScsvLine[]
     */
    protected array $answer;
    protected string $failed_logins;

    /**
     * @return int
     */
    public function getItems(): int
    {
        return $this->items;
    }

    /**
     * @param int $items
     * @return GetOrderHistoryResponse
     */
    public function setItems(int $items): GetOrderHistoryResponse
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return \Ram\WIK\Response\GetOrderHistory\OrderHistoryScsvLine[]
     */
    public function getAnswer(): array
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     * @return GetOrderHistoryResponse
     */
    public function setAnswer(string $answer): GetOrderHistoryResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new OrderHistoryScsvLine($line);
        }
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
     * @return GetOrderHistoryResponse
     */
    public function setFailedLogins(string $failed_logins): GetOrderHistoryResponse
    {
        $this->failed_logins = $failed_logins;
        return $this;
    }


}
