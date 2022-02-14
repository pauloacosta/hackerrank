<?php

/*
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function fizzBuzz($n) {
    
    for ($i = 1; $i<=$n; $i++ ) {
        if ($i % 3 == 0) {
            if ($i % 5 == 0) {
                print "FizzBuzz".PHP_EOL;
            } else {
                print "Fizz".PHP_EOL;
            }
        } else {
            if ($i % 5 == 0) {
                print "Buzz".PHP_EOL;
            } else {
                print "$i".PHP_EOL;
            }   
        }
    }

}

$n = intval(trim(fgets(STDIN)));
fizzBuzz($n);
