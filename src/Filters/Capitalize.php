<?php

namespace Waavi\Sanitizer\Filters;

use Waavi\Sanitizer\Contracts\Filter;

class Capitalize implements Filter
{
    /**
     *  Capitalize the given string.
     *
     * @param string $value
     * @param array $options
     * @return string
     */
    public function apply($value, $options = [])
    {
        return is_string($value) ? mb_convert_case(mb_strtolower($value, 'UTF-8'),  MB_CASE_TITLE) : $value;
    }
}
