<?php
    /* BOOLEANS */

    $isCompleted = 'false';

    // integers 0 -0 = false
    // floats 0.0 -0.0 = false
    // '' = false
    // '0' = false
    // [] = false
    // null = false

    var_dump(is_bool($isCompleted));

    if($isCompleted){
        echo 'Success';
    } else {
        echo 'Fail';
    }
?>