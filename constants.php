<?php
    //Constants
    define('STATUS_PAID', 'paid');

    //No need to put a $ sign when echoing a constant, we can't change its value since it will result in error
    echo STATUS_PAID;

    //This checks if a constant has been defined or not and it returns boolean values
    echo defined('STATUS_PAID');

    //We can define contacts using the const keyword as well
    const STATUS_VOID = 'box';

    //Variable Variables
    $foo = 'bar';
    $$foo = 'baz'; //This is the same as writing $bar = 'baz';

    echo $foo, $bar;
?>