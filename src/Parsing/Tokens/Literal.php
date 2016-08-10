<?php
/**
 * Represents a literal value
 */

namespace AsciiSoup\Twerp\Parsing\Tokens;


class Literal implements Token
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
