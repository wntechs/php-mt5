<?php

namespace Ram\WIK\Request;

class ModifyPositionRequest extends BaseRequest
{
    protected string $action = 'modifyposition';

    protected string $position;
    protected float $sl;
    protected float $tp;

}
