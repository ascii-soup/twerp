<?php
/**
 * Reads characters from a string
 */

namespace AsciiSoup\Twerp\Parsing;


class Reader
{
    /**
     * @var string
     */
    private $string;

    /**
     * @var int
     */
    private $position = 0;

    function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * Return the next available character and advance the pointer
     */
    public function next(): string
    {
        // Grab the next character
        $next = substr($this->string, $this->position, 1);

        // Advance the pointer to the next character
        $this->position++;

        return $next;
    }

    /**
     * Return the next available character without advancing the pointer
     * @return string
     */
    public function peek()
    {
        // Grab the next character
        $next = substr($this->string, $this->position, 1);

        // Do not advance the pointer
        return $next;
    }
}
