<?php

namespace Ram\WIK\Response;

use ReflectionClass;

trait ResponseParser
{
    public function parseResponse(string $response): void
    {
        $reflector = new ReflectionClass($this);
        parse_str($response, $data);

        foreach ($data as $index => $value) {

            $method = "set" . ucfirst($index);
            if (!empty(trim($value)) && $reflector->hasMethod($method)) {
                $this->{$method}($value);
            }
        }
    }
}
