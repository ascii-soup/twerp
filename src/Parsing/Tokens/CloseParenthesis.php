<?php
/**
 * Token for close paren
 */

namespace AsciiSoup\Twerp\Parsing\Tokens;


class CloseParenthesis implements Token
{
    public function value(): string
    {
        return ')';
    }
}
