<?php

namespace Waavi\Sanitizer\Filters;

use Waavi\Sanitizer\Contracts\Filter;

class Uppercase implements Filter
{
    /**
     *  Lowercase the given string.
     *
     * @param string $value
     * @param array $options
     * @return string
     */
    public function apply($value, $options = [])
    {
        return is_string($value) ? mb_strtoupper($value) : $value;
    }
}
