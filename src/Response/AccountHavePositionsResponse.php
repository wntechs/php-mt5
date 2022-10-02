<?php

namespace Ram\WIK\Response;

class AccountHavePositionsResponse extends BaseResponse
{
    protected int $positions = 0;
    protected int $login = 0;

    /**
     * @return int
     */
    public function getPositions(): int
    {
        return $this->positions;
    }

    /**
     * @param int $positions
     * @return AccountHavePositionsResponse
     */
    public function setPositions(int $positions): AccountHavePositionsResponse
    {
        $this->positions = $positions;
        return $this;
    }

    /**
     * @return int
     */
    public function getLogin(): int
    {
        return $this->login;
    }

    /**
     * @param int $login
     * @return AccountHavePositionsResponse
     */
    public function setLogin(int $login): AccountHavePositionsResponse
    {
        $this->login = $login;
        return $this;
    }



}
