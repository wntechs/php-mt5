<?php

namespace Ram\WIK\Request;

class GetMarginInfoRequest extends BaseRequest
{
    protected string $action ='getmargininfo';

    /**
     * @var string[]
     */
    protected array $login;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }



    /**
     * @return array
     */
    public function getLogin(): array
    {
        return $this->login;
    }

    /**
     * @param array $login
     * @return GetMarginInfoRequest
     */
    public function setLogin(array $login): GetMarginInfoRequest
    {
        $this->login = $login;
        return $this;
    }



}
