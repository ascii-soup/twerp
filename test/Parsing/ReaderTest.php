<?php
/**
 * Tests for the Parsing\Reader
 */

namespace AsciiSoup\Twerp\Tests\Parsing;


use AsciiSoup\Twerp\Parsing\Reader;

class ReaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function it_returns_blank_string_given_a_blank_string()
    {
        $reader = new Reader("");
        assertThat($reader->next(), is(""));
    }

    /**
     * @test
     */
    function next_returns_the_first_character()
    {
        $reader = new Reader("Hello World");
        assertThat($reader->next(), is('H'));
    }

    /**
     * @test
     */
    function next_advances_to_the_next_character()
    {
        $reader = new Reader("Hello World");
        $reader->next();
        assertThat($reader->next(), is('e'));
    }

    /**
     * @test
     */
    function peek_shows_the_next_character_but_does_not_advance_the_position()
    {
        $reader = new Reader("Hello World");
        $reader->next();
        assertThat($reader->peek(), is('e'));
        assertThat($reader->peek(), is('e'));
    }

    /**
     * @test
     */
    function next_returns_blank_at_end_of_string()
    {
        $reader = new Reader("Short");
        $reader->next(); // S
        $reader->next(); // h
        $reader->next(); // o
        $reader->next(); // r
        $reader->next(); // t
        assertThat($reader->next(), is(""));
    }

    /**
     * @test
     */
    function current_returns_the_current_character()
    {
        $reader = new Reader("Hello World");
        $reader->next();
        assertThat($reader->current(), is('H'));
    }
}
