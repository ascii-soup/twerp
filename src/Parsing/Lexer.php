<?php
/**
 * Lexes the text into tokens
 */

namespace AsciiSoup\Twerp\Parsing;


use AsciiSoup\Twerp\Parsing\Tokens;

class Lexer
{
    /**
     * @var Reader
     */
    private $reader;

    function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }

    public function next(): Tokens\Token
    {
        $c = $this->reader->next();

        // Is this the end of the input?
        if ($c === "") {
            return new Tokens\EOF;
        }

        // Simple tokens
        if ($c === '(') {
            return new Tokens\OpenParenthesis();
        }
        if ($c === ')') {
            return new Tokens\CloseParenthesis();
        }

        // Check for defined functions
        $value = $this->readUntil([' ', '(', ')']);
        if (in_array($value, ['+', '-', '/', '*'])) {
            return new Tokens\Func($value);
        }

        if ($value === "") {

        }
        return new Tokens\Literal($value);
    }

    /**
     * @param array $delimiters
     * @return string
     */
    private function readUntil(array $delimiters)
    {
        $buffer = $this->reader->current();

        while (true) {
            $c = $this->reader->peek();
            if ($c === "" || in_array($c, $delimiters)) {
                return $buffer;
            }

            $buffer .= $c;
            $this->reader->next();
        }

        return $buffer;
    }

}
