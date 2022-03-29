<?php
    /* Data Types & Type Casting */

    # 4 Scalar Types
        # bool - true / false
        $completed = true;
        # int - 1, 2, 3, 0, -5 (no decimal)
        $score = 75;
        # float - 1.5, 0.1, 0.005, -15.8
        $price = 0.99;
        # string - "Hello", "Yes"
        $greeting = 'Hello there';

        echo $completed . '<br />';
        echo $score . '<br />';
        echo $price . '<br />';
        echo $greeting . '<br />';

        echo gettype($completed) . '<br />';
        echo var_dump($completed) . '<br />'; //This prints the type as well as its value

    # 4 Compound Types
        # array
        $companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
        print_r($companies);
        # object
        # callable
        # iterable

    # 2 Special Types
        # resource
        # null

?>