<?php
/**
 * Runs the twerp interpreter
 */
require 'vendor/autoload.php';

println("Twerp v0.1");
println("==========");
println();

while (true) {
    $input = fgets(STDIN);
    println("Input: " . $input);
}
