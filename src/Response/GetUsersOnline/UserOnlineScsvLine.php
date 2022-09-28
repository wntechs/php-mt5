<?php

namespace Ram\WIK\Response\GetUsersOnline;

use Ram\WIK\Arrayable;
use Ram\WIK\Response\ScsvParser;

class UserOnlineScsvLine extends Arrayable
{
    use ScsvParser;

    private array $keys = ['login', 'ip', ];
    protected string $login;
    protected string $ip;

    public function __construct(string $line)
    {
        $this->parseCsv($line);
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
     * @return UserOnlineScsvLine
     */
    public function setLogin(string $login): UserOnlineScsvLine
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return UserOnlineScsvLine
     */
    public function setIp(string $ip): UserOnlineScsvLine
    {
        $this->ip = $ip;
        return $this;
    }


}
