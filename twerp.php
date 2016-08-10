<?php
/**
 * Runs the twerp interpreter
 */
use AsciiSoup\Twerp\Parsing\Lexer;
use AsciiSoup\Twerp\Parsing\Reader;
use AsciiSoup\Twerp\Parsing\Tokens;

require 'vendor/autoload.php';

println("Twerp v0.1");
println("==========");
println();

while (true) {
    $input = trim(fgets(STDIN));

    $reader = new Reader($input);
    $lexer = new Lexer($reader);

    while ($token = $lexer->next()) {
        if ($token instanceof Tokens\EOF) {
            break;
        }
        println(get_class($token) . ': ' . $token->value());
    }
}
