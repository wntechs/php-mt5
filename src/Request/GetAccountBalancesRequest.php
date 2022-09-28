<?php

namespace Ram\WIK\Request;

class GetAccountBalancesRequest extends BaseRequest
{
    protected string $action = 'getaccountbalance';

    /**
     * @var int[]
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
     * @return GetAccountBalancesRequest
     */
    public function setLogin(array $login): GetAccountBalancesRequest
    {
        $this->login = $login;
        return $this;
    }



}
