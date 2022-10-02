<?php

namespace Ram\WIK\Response;

use ReflectionClass;

trait ScsvParser
{

    public function parseCsv(string $line): void
    {
        $reflector = new ReflectionClass($this);
        $row = str_getcsv($line, ';');
        foreach ($row as $index => $column){
            if(isset($this->keys[$index])) {
                $formattedKey = str_replace('_','',ucfirst($this->keys[$index]));
                $method = "set" . $formattedKey;
                if ($column != null && $reflector->hasMethod($method)) {
                    $this->{$method}($column);
                }
            }
        }
    }
}
