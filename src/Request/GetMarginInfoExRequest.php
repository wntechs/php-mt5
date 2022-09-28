<?php

namespace Ram\WIK\Request;

class GetMarginInfoExRequest extends BaseRequest
{
    protected string $action = 'getmargininfoex';

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @var string[]
     */
    protected array $login;

    /**
     * @return array
     */
    public function getLogin(): array
    {
        return $this->login;
    }

    /**
     * @param array $login
     * @return GetMarginInfoExRequest
     */
    public function setLogin(array $login): GetMarginInfoExRequest
    {
        $this->login = $login;
        return $this;
    }

}
