<?php
/**
 * Represents a token
 */

namespace AsciiSoup\Twerp\Parsing\Tokens;


interface Token
{
    /**
     * The textual representation of the token
     *
     * @return string
     */
    public function value(): string;
}
