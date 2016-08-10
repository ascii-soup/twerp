<?php
/**
 * Tests for the Parsing\Lexer
 */

namespace AsciiSoup\Twerp\Tests\Parsing;


use AsciiSoup\Twerp\Parsing\Lexer;
use AsciiSoup\Twerp\Parsing\Reader;
use AsciiSoup\Twerp\Parsing\Tokens;

class LexerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function next_returns_a_token()
    {
        $lexer = new Lexer(new Reader("(+ 1 2)"));
        assertThat($lexer->next(), is(anInstanceOf(Tokens\OpenParenthesis::class)));
    }

    /**
     * @test
     */
    function next_returns_the_next_token()
    {
        $lexer = new Lexer(new Reader("(+ 1 2)"));
        assertThat($lexer->next(), is(anInstanceOf(Tokens\OpenParenthesis::class)));
        assertThat($lexer->next(), is(anInstanceOf(Tokens\Func::class)));
        assertThat($lexer->next(), is(anInstanceOf(Tokens\Literal::class)));
        assertThat($lexer->next(), is(anInstanceOf(Tokens\Literal::class)));
        assertThat($lexer->next(), is(anInstanceOf(Tokens\CloseParenthesis::class)));
    }

    /**
     * @test
     */
    function next_adds_the_value_to_the_token()
    {
        $lexer = new Lexer(new Reader("(+ 1 2)"));
        assertThat($lexer->next()->value(), is('('));
        assertThat($lexer->next()->value(), is('+'));
    }
}
