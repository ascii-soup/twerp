<?php
/**
 * Represents a function token
 */

namespace AsciiSoup\Twerp\Parsing\Tokens;


class Func implements Token
{
    /**
     * @var string
     */
    private $value;

    function __construct($value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
