<?php

namespace Ram\WIK\Response\GetBalancesOperations;

use Ram\WIK\Response\BaseResponse;

class GetBalancesOperationsResponse extends BaseResponse
{

    protected string $login = '';

    /**
     * @var \Ram\WIK\Response\GetBalancesOperations\BalanceOperationScsvLine[]
     */
    protected array $answer = [];

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return GetBalancesOperationsResponse
     */
    public function setLogin(string $login): GetBalancesOperationsResponse
    {
        $this->login = $login;
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
     * @return GetBalancesOperationsResponse
     */
    public function setAnswer(string $answer): GetBalancesOperationsResponse
    {
        $lines = explode(PHP_EOL, $answer);
        foreach ($lines as $line) {
            if(strlen($line) > 0)
                $this->answer[] = new BalanceOperationScsvLine($line);
        }
        return $this;
    }



}
