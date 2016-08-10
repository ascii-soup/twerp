<?php
/**
 * Token for open paren
 */

namespace AsciiSoup\Twerp\Parsing\Tokens;


class OpenParenthesis implements Token
{
    public function value(): string
    {
        return '(';
    }
}
