<?php

namespace Ram\WIK\Response\GetLeverageAndGroup;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class LeverageAndGroupScsvLine  extends Arrayable
{
    use ScsvParser;

    private array $keys = ['login', 'group', 'leverage'];
    protected string $login;
    protected string $group;
    protected int $leverage;

    public function __construct(string $line)
    {
        $this->parseCsv($line);
    }

    /**
     * @return array
     */
    public function getKeys(): array
    {
        return $this->keys;
    }

    /**
     * @param array $keys
     * @return LeverageAndGroupScsvLine
     */
    public function setKeys(array $keys): LeverageAndGroupScsvLine
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
     * @return LeverageAndGroupScsvLine
     */
    public function setLogin(string $login): LeverageAndGroupScsvLine
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     * @return LeverageAndGroupScsvLine
     */
    public function setGroup(string $group): LeverageAndGroupScsvLine
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return int
     */
    public function getLeverage(): int
    {
        return $this->leverage;
    }

    /**
     * @param int $leverage
     * @return LeverageAndGroupScsvLine
     */
    public function setLeverage(int $leverage): LeverageAndGroupScsvLine
    {
        $this->leverage = $leverage;
        return $this;
    }


}
