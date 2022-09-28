<?php

namespace Ram\WIK\Request;

class SplittingPositionRequest extends BaseRequest
{
    protected string $action = 'splittingposition';

    protected string $groups;

    protected float $new_shares;
    protected float $old_shares;
    protected bool $clear_sltp;
    protected int $volume;
    protected int $price;
    protected string $symbol;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getGroups(): string
    {
        return $this->groups;
    }

    /**
     * @param string $groups
     * @return SplittingPositionRequest
     */
    public function setGroups(string $groups): SplittingPositionRequest
    {
        $this->groups = $groups;
        return $this;
    }

    /**
     * @return float
     */
    public function getNewShares(): float
    {
        return $this->new_shares;
    }

    /**
     * @param float $new_shares
     * @return SplittingPositionRequest
     */
    public function setNewShares(float $new_shares): SplittingPositionRequest
    {
        $this->new_shares = $new_shares;
        return $this;
    }

    /**
     * @return float
     */
    public function getOldShares(): float
    {
        return $this->old_shares;
    }

    /**
     * @param float $old_shares
     * @return SplittingPositionRequest
     */
    public function setOldShares(float $old_shares): SplittingPositionRequest
    {
        $this->old_shares = $old_shares;
        return $this;
    }

    /**
     * @return bool
     */
    public function isClearSltp(): bool
    {
        return $this->clear_sltp;
    }

    /**
     * @param bool $clear_sltp
     * @return SplittingPositionRequest
     */
    public function setClearSltp(bool $clear_sltp): SplittingPositionRequest
    {
        $this->clear_sltp = $clear_sltp;
        return $this;
    }

    /**
     * @return int
     */
    public function getVolume(): int
    {
        return $this->volume;
    }

    /**
     * @param int $volume
     * @return SplittingPositionRequest
     */
    public function setVolume(int $volume): SplittingPositionRequest
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     * @return SplittingPositionRequest
     */
    public function setPrice(int $price): SplittingPositionRequest
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return SplittingPositionRequest
     */
    public function setSymbol(string $symbol): SplittingPositionRequest
    {
        $this->symbol = $symbol;
        return $this;
    }


}
