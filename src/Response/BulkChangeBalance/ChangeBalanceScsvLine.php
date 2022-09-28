<?php

namespace Ram\WIK\Response\BulkChangeBalance;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class ChangeBalanceScsvLine  extends Arrayable
{
    use ScsvParser;

    private array $keys = ['login', 'newbalance', 'deal', 'success_flag'];

    protected string $login;
    protected float $newbalance;
    protected bool $success_flag;

    /**
     * @return array
     */
    public function getKeys(): array
    {
        return $this->keys;
    }

    /**
     * @param array $keys
     * @return ChangeBalanceScsvLine
     */
    public function setKeys(array $keys): ChangeBalanceScsvLine
    {
        $this->keys = $keys;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return ChangeBalanceScsvLine
     */
    public function setLogin(string $login): ChangeBalanceScsvLine
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return float
     */
    public function getNewbalance(): float
    {
        return $this->newbalance;
    }

    /**
     * @param float $newbalance
     * @return ChangeBalanceScsvLine
     */
    public function setNewbalance(float $newbalance): ChangeBalanceScsvLine
    {
        $this->newbalance = $newbalance;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuccessFlag(): bool
    {
        return $this->success_flag;
    }

    /**
     * @param bool $success_flag
     * @return ChangeBalanceScsvLine
     */
    public function setSuccessFlag(bool $success_flag): ChangeBalanceScsvLine
    {
        $this->success_flag = $success_flag;
        return $this;
    }


}
