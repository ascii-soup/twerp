<?php
/**
 * Represents an end-of-file token
 */

namespace AsciiSoup\Twerp\Parsing\Tokens;


class EOF implements Token
{
    public function value(): string
    {
        return '';
    }
}
