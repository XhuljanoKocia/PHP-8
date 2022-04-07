<?php
    require_once 'transaction.php';

    // Classes & Objects
    $transaction = new Transaction(100, 'Transaction 1');

    // $transaction->amount = 15; //When the parameters are public we can change their values
    // $transaction->addTax(8);
    // $transaction->applyDiscount(10);

    $transaction->addTax(8)->applyDiscount(10); //We can chain methods when we return the Transaction on the class methods

    var_dump($transaction->getAmount());

    //Suppose we receive a json string
    $str = '{"a":1,"b":2,"c":3}';
    $arr = json_decode($str, true); //We decode it and save it into an array

    var_dump($arr)
?>