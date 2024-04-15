<?php

namespace App\Enums\Traits;

trait Options
{
    public static function options(bool $toName = false): array
    {
        $options = [];
        $cases = static::cases();

        $strVal = $toName ? "name" : "value";

        foreach ($cases as $case) {
            $options[$case->{$strVal}] =  $case->description();
        }

        return $options;
    }
}
